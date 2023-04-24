<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
class blogCommentController extends Controller
{
    public function storeComment(Request $request)
    {
        $comment = new comment();
        $comment->blog_id = $request->blog_id;
        $comment->user_name = $request->user_name;
        $comment->comment = $request->comment;
        $comment->save();
        return back();
    }
}
