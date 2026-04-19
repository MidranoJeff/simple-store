<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Show cart
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_column($cart, 'subtotal'));

        return view('cart.index', compact('cart', 'total'));
    }

    // Add to cart
    public function add(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        $quantity = (int) $request->quantity;

        // If product already in cart, add quantity
        if (isset($cart[$product->id])) {
            $quantity += $cart[$product->id]['quantity'];
        }

        // Check stock
        if ($quantity > $product->stock) {
            return back()->with('error', 'Not enough stock available!');
        }

        // Save/update cart item
        $cart[$product->id] = [
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'subtotal' => $product->price * $quantity,
        ];

        // Save to session (FIXED)
        session()->put('cart', $cart);

        return redirect('/cart')->with('success', 'Added to cart!');
    }

    // Update cart quantity
    public function update(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $request->quantity;
            $cart[$productId]['subtotal'] =
                $cart[$productId]['price'] * $request->quantity;

            session()->put('cart', $cart);
        }

        return back()->with('success', 'Cart updated!');
    }

    // Remove item from cart
    public function remove($productId)
    {
        $cart = session()->get('cart', []);

        unset($cart[$productId]);

        session()->put('cart', $cart);

        return back()->with('success', 'Item removed from cart!');
    }

    // Clear entire cart
    public function clear()
    {
        session()->forget('cart');

        return back()->with('success', 'Cart cleared!');
    }
}