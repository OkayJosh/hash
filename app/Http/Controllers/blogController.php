<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use App\Http\Controllers\Controller;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();

        return view('blog.index')->with('blogs', $blogs);
    }


}
