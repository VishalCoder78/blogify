<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userBlog;

class blogDetailsController extends Controller
{
    public function blogDetails(Request $request, $id)
    {
        $status =userBlog::find($id);
        $blogs =userBlog::all();
        return view('admin.blogDetails', compact('blogs'));
    }
}
