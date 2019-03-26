<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();

      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
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
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required',
        'secret'=>'required'
      ]);

      $post = new Post([
        'first_name' => $request->get('first_name'),
        'last_name' => $request->get('last_name'),
        'age' => $request->get('age'),
        'email' => $request->get('email'),
        'secret' => $request->get('secret')
      ]);
      $post->save();
      return redirect('/posts')->with('success', "Data Saved...");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit', compact('post'));
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
      $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required',
        'secret'=>'required'
      ]);

      $post = Post::find($id);
      $post->first_name = $request->get('first_name');
      $post->last_name = $request->get('last_name');
      $post->age = $request->get('age');
      $post->email = $request->get('email');
      $post->secret = $request->get('secret');
      $post->save();

      return redirect('/posts')->with('success', 'Data Updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();

      return redirect('/posts')->with('success', 'Data has been deleted.');
    }
}
