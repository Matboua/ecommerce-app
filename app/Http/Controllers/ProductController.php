<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categorie')->orderBy('id', 'desc')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|unique:products',
            'price'=>'required',
            'stock'=>'required',
            'description'=>'required',
            'categorie_id'=>'required|exists:categories,id',
            'image'=>'nullable|mimes:jpg,png,jpeg|max:2000',
        ]);
        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('products', 'public');
            $validatedData['image']="storage/{$imagePath}";
        }
        Product::create($validatedData);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::with('categorie')->find($id);
        return view('products.show', compact( 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Categorie::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'name'=>"required|unique:products,name,{$id}",
            'price'=>'required',
            'stock'=>'required',
            'description'=>'required',
            'categorie_id'=>'required|exists:categories,id',
            'image'=>'nullable|mimes:jpg,png,jpeg|max:2000',
        ]);
        if($request->hasFile('image')){
            $imagePath=$request->file('image')->store('products', 'public');
            $validatedData['image']="storage/{$imagePath}";
        }
        Product::find($id)->update($validatedData);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
