<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $amount = $request->input('amount'); // total amount in rupees
        $amount_cents = $amount * 100; // convert to cents (paise)

        $cart = session('cart', []);

        $line_items = [];

        foreach ($cart as $id => $item) {
            $line_items[] = [
                'price_data' => [
                    'currency' => 'inr',
                    'product_data' => [
                        'name' => $item['name'],
                        'images' => [$item['image']],
                    ],
                    'unit_amount' => $item['price'] * 100, // Stripe amount in paise
                ],
                'quantity' => $item['quantity'],
            ];
        }

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $line_items,
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($checkout_session->url);
    }

    public function success()
    {
        // Clear cart
        session()->forget('cart');
        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}
