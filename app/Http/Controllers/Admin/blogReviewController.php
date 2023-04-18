<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userBlog;
use App\Models\blogStatus;

class blogReviewController extends Controller
{
    public function getBlog()
    {
        $blogs = userBlog::all();
        $blogStatus = userBlog::all();
        return view('admin.blog', compact('blogs'));
    }
    public function blogStatus(Request $request,$id)
    {
        $status =userBlog::find($id);
        $status->blog_status = $request->blog_status;
        $status->update();
        return back();
    }
    // public function decline()
    // {
    //     dd('Blog Decline');
    // }
}
