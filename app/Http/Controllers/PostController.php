<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //   $newPost = new Post;
    //   $newPost -> title = 'new post';
    //   $newPost -> short_content = 'new post short_content';
    //   $newPost -> content = 'new post content';
    //   $newPost -> photo = 'new_post.jpg ';

         $newPost = Post::create([
            'title'=>'5',
            'short_content'=>'short',
            'content'=>'content',
            'photo'=>'photo.jpg'
         ]);
      return 'success ';
        // return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
