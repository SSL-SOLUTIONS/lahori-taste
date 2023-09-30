<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel(){
    if (auth()->user()->isAdmin()) {
        // The user is an admin, so show the admin dashboard
        return view('admin');
    } else {
        // The user is not an admin, handle accordingly (e.g., redirect to the default page)
        return redirect('/');
    }
}
}