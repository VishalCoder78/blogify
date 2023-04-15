<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogStatus;

class homeController extends Controller
{
    public function dashboard()
    {
        $blogs = blogStatus::all();
        return view('dashboard', compact('blogs'));
    }
}
