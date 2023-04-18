<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userBlog;

class HomeController extends Controller
{
    public function dashboard()
    {
        $blogs = userBlog::all();
        return view('admin.dashboard', compact('blogs'));
    }
    public function register()
    {
        return view('admin.register');
    }
}
