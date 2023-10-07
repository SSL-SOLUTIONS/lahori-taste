<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Prompts\Prompt;

class WebsiteController extends Controller

{
    public function website(Request $request)

    {
        $categoryId = $request->input('category');
        $categories = Category::all();
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }
        return view('website', compact('products', 'categories'));
    }

    public function main(Request $request)
    {

        $categoryId = $request->input('category');
        $categories = Category::all();
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
            $products = Product::all();
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
        $order = Order::whereUserId(auth()->id())->findorfail($id);
        return view('website.orders.show', compact('order'));
    }

}
