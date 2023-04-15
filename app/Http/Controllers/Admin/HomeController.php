<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogStatus;

class HomeController extends Controller
{
    public function dashboard()
    {
        $blogs = blogStatus::all();
        return view('admin.dashboard', compact('blogs'));
    }
    public function register()
    {
        return view('admin.register');
    }
}
