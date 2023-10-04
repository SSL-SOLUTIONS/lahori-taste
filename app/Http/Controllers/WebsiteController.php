<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Prompts\Prompt;

class WebsiteController extends Controller

{
    public function website(Request $request)
    {
        // Get the 'category' parameter from the request
        $categoryId = $request->input('category');

        // Retrieve all categories
        $categories = Category::paginate(7);

        // Retrieve products filtered by category if a category is specified
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }

        return view('website', compact('products', 'categories'));
    }

    public function main(Request $request)
    {
        // Get the 'category' parameter from the request
        $categoryId = $request->input('category');

        // Retrieve all categories
        $categories = Category::paginate(7);

        // Retrieve products filtered by category if a category is specified
        if ($categoryId) {
            $products = Product::where('category', $categoryId)->get();
        } else {
            $products = Product::paginate(12);
        }

        return view('website.main', compact('products', 'categories'));
    }

    public function menus($category = null)
    {
        // Initialize the products variable
        $products = null;

        if ($category) {
            $products = Product::where('category_id', $category)->paginate(9);
        } else {
            // If no category is provided, fetch all products with pagination
            $products = Product::paginate(9);
        }

        // Pass the products to the view
        return view('website.menu')->with('products', $products);
    }

    public function services()
    {
        return view('website.services');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function cart(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $orders = session()->get('orders', []);
        $products = Product::all();
        return view('website.cart', compact('cart', 'products', 'orders'));
    }

    public function orders()
    {
        // Retrieve cart data from session
        $cartItems = session()->get('cart', []);

        return view('website.order', ['orders' => $cartItems]);
    }


    public function placeOrder(Request $request)
    {
        // Get user information and cart data
        $user = auth()->user();
        $userId = $user->id;
        $cartItems = session()->get('cart', []);

        // Create an array to store order data
        $orderData = [];

        // Create orders based on cart items and add them to the order data array
        foreach ($cartItems as $cartItem) {
            $orderData[] = [
                'user_id' => $userId,
                'product_id' => $cartItem['product_id'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
                'payment_status' => 'paid',
                'delivery_status' => 'processing',
            ];
        }

        // Store the order data in the session under the key 'pending_orders'
        session(['pending_orders' => $orderData]);

        // Clear the cart in the session
        session()->forget('cart');

        // Redirect to the order history page
        return redirect()->route('orders')->with('success', 'Order placed successfully!');
    }
}
