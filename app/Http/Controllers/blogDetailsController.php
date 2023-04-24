<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userBlog;
use App\Models\comment;

class blogDetailsController extends Controller
{
    //

    public function blogDetails(Request $request, $id)
    {
        $status = userBlog::find($id);

        return view('blogDetails')
            ->with('blogs', userBlog::all())
            ->with('comments', comment::all());

        // $blogs = userBlog::all();
        // return view('blogDetails', compact('blogs'));
    }
}