<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postovi = Post::orderBy('id', 'desc')->paginate(4);
        return view('allposts.sveobjave')->with('postovi', $postovi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allposts.napraviobjavu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'naslovobjave'=>'min:5|max:50|required',
            'telo'=>'required|min:10'
        ]);
        $post = new Post;
        $post->title=$request->input('naslovobjave');
        $post->body=$request->input('telo');
        $post->save();
        return redirect('/strposts')->with('uspesno', 'Objava je kreirana');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jednaobjava = Post::find($id);
        return view('allposts.prikazobjave')->with('jednaobjava', $jednaobjava);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jednaobjava = Post::find($id);
        $jednaobjava->delete();
        return redirect('/strposts')->with('uspesno', 'Objava je izbrisana');
    }
}
