<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieStoreRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieStoreRequest $request)
    {
        $validated = $request->validated();

        if($request->hasFile('image')){
            $validated['image'] = Storage::putFile('uploads/categories/images', $request->file('image'));
        }

        $validated['slug'] = Str::slug($validated['name']);

        Categorie::create($validated);

        return redirect()->route('admin.categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Categorie::findOrFail($id);
        
        return view('admin.categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request, string $id)
    {
        $category = Categorie::findOrFail($id);

        $validated = $request->validated();

        if($request->hasFile('image')){
            if($category->image){
                Storage::delete($category->image);
            }
            $validated['image'] = Storage::putFile('uploads/categories/images', $request->file('image'));
        }
        
        $category->update($validated);


        return redirect()->route('admin.categories.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Categorie::findOrFail($id);

        if($category->image){
            Storage::delete($category->image);
        }

        $category->delete();

        return redirect()->back();
    }
}
