<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\TableName;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
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
        return view('front.shop',compact('product','comments'));
    }

    public function authors()
    {
        return view('front.authors');
    }

    public function author(string $id)
    {
        return view('front.author');
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
