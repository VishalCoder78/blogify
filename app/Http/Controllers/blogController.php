<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userBlog;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class blogController extends Controller
{
    public function viewBlog()
    {
        $data = Auth::User();
        return view('blog',compact('data'));
    }
    public function blog(Request $request)
    {
        // if(count($request->all()) > 0) {
        //     dd('request all input not empty.');
        // } else {
        //     dd('request all input empty.');
        // }
        $user = new userBlog();
        $user-> user_name = $request->user_name;
        $user-> user_email = $request->user_email;
        $user-> blog_title = $request->blog_title;
        $user-> blog = $request->blog;
        $user-> blog_status = $request->blog_status;
        $user-> user_id = $request->user_id;
        $user->save();
        return back();
    }
}
