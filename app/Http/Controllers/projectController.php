<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userBlog;
use App\Models\blogStatus;

class projectController extends Controller
{
    public function project()
    {
        $blogs = userBlog::all();
        return view('project', compact('blogs'));
    }
}
