<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderDetail;
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
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }
        return view('website', compact('products', 'categories'));
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
        $orders = Order::whereUserId(auth()->id())->get();

        return view('website.orders.index', get_defined_vars());
    }
    public function orderDetails($id){
        $orderdetails = OrderDetail::where('order_id', $id)->whereHas('order' , function($q){
            $q->whereUserId(auth()->id());
        })->get();
        return view('website.orders.show', compact('orderdetails'));
    }

}
