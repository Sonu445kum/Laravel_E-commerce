<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show single product
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Add product to cart
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        // Get cart data from session (or empty array if not exists)
        $cart = session()->get('cart', []);

        // If product already exists, increase quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Else add new product
            $cart[$id] = [
                'name'     => $product->name,
                'price'    => $product->price,
                'quantity' => 1,
                'image'    => $product->image,
            ];
        }

        // Update the session
        session()->put('cart', $cart);

        // ✅ Redirect to cart page after adding
        return redirect()->route('cart.index')->with('success', "{$product->name} added to cart!");
    }

    /**
     * View cart page
     */
    public function cart()
    {
        $cart = session()->get('cart', []);

        // Remove null or invalid items
        $cart = array_filter($cart, fn($item) => $item && isset($item['name']));

        // Re-save clean cart
        session()->put('cart', $cart);

        return view('cart', compact('cart'));
    }

    /**
     * Remove a product from cart
     */
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }

    /**
     * Checkout page view
     */
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        return view('checkout', compact('cart'));
    }
}
