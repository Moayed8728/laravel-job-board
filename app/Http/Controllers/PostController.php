<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Post::cursorPaginate(5);
    
        return view('post.index',['posts' => $data,"pageTitle" => "Blog"  ]);
    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      Post::factory(10)->create();

         return view('post.create',["pageTitle"=> "Blog - Create new post"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@todo 3a08dd10-697f-46fb-bffa-e24a8301daf9
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post = Post::find($id);

        return view('post.show',['post'=> $post,"pageTitle" => $post->title ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit',['post'=> $post,'pageTitle'=> 'Edit Post']);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@todo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@todo
    }
}
