<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use App\Http\Requests\BlogFormRequest;
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
        $blogs = \App\Blog::all();

        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $this->middleware('auth');
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

        // $blog->title = request('title');
        // $blog->content_of_post = request('content');
        // // $blog->timestamps();
        \App\Blog::create([
            'title' => $request->get('title'),
            'content_of_post' => $request->get('content'),
          ]);
        flash("You New Post has been saved")->success();

          return redirect('blog/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $blogs = \App\Blog::all();

        return view('blog/show', ['blogs' => $blogs]);
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
