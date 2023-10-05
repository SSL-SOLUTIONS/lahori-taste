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
        $cartCount = count(session('cart'));
        $categoryId = $request->input('category');
        $categories = Category::paginate(7);
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }
        return view('website', compact('products', 'categories','cartCount'));
    }

    public function main(Request $request)
    {
        // Get the 'category' parameter from the request
        $categoryId = $request->input('category');

        // Retrieve all categories
        $categories = Category::paginate(7);
        $cartCount = count(session('cart'));

        // Retrieve products filtered by category if a category is specified
        if ($categoryId) {
            $products = Product::where('category_id', $categoryId)->get();
        } else {
            $products = Product::all();
        }
        return view('website', compact('products', 'categories','cartCount'));
    }

    public function menus($category = null)
    {
        
            
            $products = Product::all();
        $cartCount = count(session('cart'));
        return view('website.menu', compact(['products', 'cartCount']));
    }

    public function services()
    {
        return view('website.services');
    }
    public function about()
    {      $cartCount = count(session('cart'));
        return view('website.about', compact('cartCount'));
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
        $cartCount = count(session('cart'));
        return view('website.cart', compact('cart', 'products', 'orders','cartCount'));
    }

    public function orders()
    {
        // Retrieve cart data from session
        $orders = Order::whereUserId(auth()->id())->get();
        $cartCount = count(session('cart'));
        return view('website.orders.index', get_defined_vars());
    }
    public function orderDetails($id){
        $order = Order::whereUserId(auth()->id())->findorfail($id);
        return view('website.orders.show', compact('order'));
    }

}
