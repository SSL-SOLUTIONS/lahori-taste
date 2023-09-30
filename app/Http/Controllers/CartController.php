<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request, $product)
    {
        $product =Product::find($product);

        if (!$product) {
            return redirect()->route('menus')->with('error', 'Item not found.');
        }

        $cart = $request->session()->get('cart', []);

        // Check if the item with the same ID already exists in the cart
        if (isset($cart[$product->id])) {
            // Increment the quantity
            $cart[$product->id]['quantity'] += $request->quantity;
            // Update the total price
            $cart[$product->id]['price'] = $product->price * $cart[$product->id]['quantity'];
        } else {
            // If it doesn't exist, add it as a new item
            $cartItemData = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'quantity' => $request->quantity,
                'price' => $product->price * $request->quantity,
            ];

            $cart[$product->id] = $cartItemData;
        }

        // Update the cart in the session
        $request->session()->put('cart', $cart);

        return redirect()->route('menus')->with('success', 'Item added to cart.');
    }

    
    public function viewCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);
    
    
        return view('website.cart', compact('cart',));
    }

    public function remove_cart(Request $request, $id)
    {
        // Get the current cart items from the session
        $cart = $request->session()->get('cart', []);

        // Check if the item with the given ID exists in the cart
        if (array_key_exists($id, $cart)) {
            // Remove the item from the cart
            unset($cart[$id]);

            // Update the cart in the session
            $request->session()->put('cart', $cart);

            return redirect()->route('cart')->with('success', 'Item removed from cart.');
        }

        return redirect()->route('cart')->with('error', 'Item not found in cart.');
    }
}
