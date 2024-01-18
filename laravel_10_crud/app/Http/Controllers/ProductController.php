<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('products.index', [
            'products' => Product::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) : RedirectResponse
    {
        $request->validate([
            'code' => 'required|unique:products',
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            // 'images' => 'required',
            // 'images.*' => 'mimes:jpg,png,jpeg,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('images')) {
            $images = round(microtime(true) * 1000) . '-' . str_replace(' ', '-',$request->file('images')->getClientOriginalName());

            $request->file('images')->move(public_path('images'),$images);
            
            Product::create([
                'code' => $request->code,
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'description' => $request->description,
                'images' => $images
            ]);
        }
        else {
            echo "No file selected";
        }
            

        return redirect()->route('products.index')
            ->withSuccess('New product is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) : View
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product) : RedirectResponse
    {
        $product->update($request->all());
        return redirect()->back()
            ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->withSuccess('Product is Deleted successfully.');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->paginate(10);
        return view('products.trash', ['products' => $products]);
    }

    public function restore($product)
    {
        $product = Product::withTrashed()->find($product);
        $product->restore();
        return redirect()->route('products.index')
            ->withSuccess('Product restored successfully');
    }

    public function forceDelete($product)
    {
        $product = Product::withTrashed()->find($product);
        $product->forceDelete();
        return redirect()->route('products.index')
            ->withSuccess('Product permanently deleted successfully');
    }
}
