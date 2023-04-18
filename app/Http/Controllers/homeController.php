<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userBlog;

class homeController extends Controller
{
    public function dashboard()
    {
        $blogs = userBlog::all();
        return view('dashboard', compact('blogs'));
    }
}
