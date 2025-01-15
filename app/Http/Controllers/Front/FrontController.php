<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Categorie;
use App\Models\OrderProduct;
use App\Models\TableName;
use App\Models\Product;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->get();
        $categories = Categorie::where('status', 1)->get();
        $authors = Author::all();
        $topSellingBooks = Product::withSum('orderProducts as total_sales', 'quantity') // Sifarişlərin cəmini hesablamaq
            ->orderByDesc('total_sales') // Toplam satışa görə sırala
            ->take(5) // İlk 10 məhsulu götür
            ->get();

        $comments = TableName::all();

        return view('front.home', compact('products', 'categories', 'authors', 'topSellingBooks', 'comments'));
    }

    public function shops(Request $request)
    {
        $categories = Categorie::all(); // Bütün kategoriyalar
        $selectedCategoryId = $request->get('category_id'); // Seçilən kategoriya ID

        if ($selectedCategoryId) {
            $products = Product::where('category_id', $selectedCategoryId)->get(); // Seçilən kategoriya ilə bağlı məhsullar
        } else {
            $products = Product::all(); // Bütün məhsullar (default)
        }

        // compact vasitəsilə dinamik məhsulları göndəririk
        return view('front.shops', compact('categories', 'products', 'selectedCategoryId'));
    }

    public function shop(string $id)
    {
        $product = Product::find($id);
        $comments = TableName::where('product_id', $id)->get();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->get();
        return view('front.shop', compact('product', 'comments', 'relatedProducts'));
    }

    public function authors()
    {
        $authors = Author::all();
        $topSellingBooks = Product::withSum('orderProducts as total_sales', 'quantity') // Sifarişlərin cəmini hesablamaq
            ->orderByDesc('total_sales') // Toplam satışa görə sırala
            ->take(5) // İlk 10 məhsulu götür
            ->get();
        return view('front.authors', compact('authors', 'topSellingBooks'));
    }

    public function author(string $id)
    {
        $author = Author::findOrFail($id);

        $relatedProducts = Product::where('author_id', $author->id)
            ->where('id', '!=', $author->id)  // Əgər bu kodda səhifə boyunca göstərilən "product" obyektinə də ehtiyac varsa
            ->get();
        return view('front.author', compact('author', 'relatedProducts'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function basket()
    {
        return view('front.basket');
    }


    public function comment(Request $request, $product_id)
    {
        $validate = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:table_name,email',
            'content' => 'required|min:5',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);


        $validate['user_id'] = Auth::user()->id;
        $validate['product_id'] = $product_id;

        TableName::create($validate);

        return redirect()->back();
    }


    public function order()
    {

        return view('front.order');
    }
}
