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
        return view('admin.blog', compact('blogs'));
    }
    public function blogStatus(Request $request)
    {
        $status = new blogStatus();
        $status-> user_name = $request->user_name;
        $status-> user_email = $request->user_email;
        $status-> blog = $request->blog;
        $status-> user_id = $request->user_id;
        $status-> blog_status = $request->blog_status;
        $res = $status->save();
        return back();
    }
    public function decline()
    {
        dd('Blog Decline');
    }
}
