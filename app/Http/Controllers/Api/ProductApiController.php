<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    // Protect all routes with sanctum middleware
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'slug'=>'required|string|max:255|unique:products,slug',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'image'=>'required|string',
            'stock'=>'required|integer',
            'category'=>'required|string|max:255',
        ]);

        $product = Product::create($data);

        return response()->json($product,201);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'slug'=>'required|string|max:255|unique:products,slug,'.$product->id,
            'description'=>'required|string',
            'price'=>'required|numeric',
            'image'=>'required|string',
            'stock'=>'required|integer',
            'category'=>'required|string|max:255',
        ]);

        $product->update($data);

        return response()->json($product,200);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message'=>'Product deleted'],200);
    }
}
