<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userBlog;
use App\Models\comment;

class blogDetailsController extends Controller
{
    public function blogDetails(Request $request, $id)
    {
        $status =userBlog::find($id);
        return view('admin.blogDetails')
        ->with('blogs', userBlog::all())
        ->with('comments', comment::all());
    }
}
