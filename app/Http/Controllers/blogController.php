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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return View::make('blog.create');
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //

        Blog::create([
            'title'             => $request->get('title'),
            'content_of_post'   => $request->get('content'),
          ]);

          $blogs = Blog::all();
          \Session::flash('flash_message','successfully saved.');


          return view('blog.index')->with('blogs', $blogs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
