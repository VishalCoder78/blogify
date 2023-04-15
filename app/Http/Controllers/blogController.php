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
        $user = new userBlog();
        $user-> user_name = $request->user_name;
        $user-> user_email = $request->user_email;
        $user-> blog = $request->blog;
        $user-> user_id = $request->user_id;
        $res = $user->save();
        return back();
    }
}
