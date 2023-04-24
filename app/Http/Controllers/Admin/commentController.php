<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comment;

class commentController extends Controller
{
    public function storeComment(Request $request)
    {
        $comment = new comment();
        $comment->blog_id = $request->blog_id;
        $comment->user_name = $request->user_name;
        $comment->auth_type = $request->auth_type;
        $comment->comment = $request->comment;
        $comment->save();
        return back();
    }
}
