<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use Gate;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Post::latest()->paginate(15);
    
        return view('post.index',['posts' => $data,"pageTitle" => "Blog"  ]);
    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    
  public function create()
    {
        return view('post.create', [
            'pageTitle' => 'Blog - Create new post'
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        //$post->author = $request->input('author');
        $post->user_id = auth()->id();
        $post->body = $request->input('body');
        $post->published = $request->has('published');
        
        $post->save();
        
        return redirect('/blog')->with('success','Post created successfully!');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('post.show',['post'=> $post,"pageTitle" => $post->title ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        
        //Gate::authorize('edit', $post);

        // if($post->user_id !== auth()->id()){
        //     return redirect('/blog')->with('fail','Not Allowed TO EDIT THIS POST');
        // }
         return view('post.edit',['post'=> $post,'pageTitle'=> 'Edit Post: '.$post->title ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, Post $post)
    {
        
        
        //Gate::authorize('update', $post);

        

        $post->title = $request->input('title');
        //$post->author = $request->input('author');  
        $post->user_id = auth()->id();
        $post->body = $request->input('body');
        $post->published = $request->has('published');

        $post->save();
        return redirect('/blog')->with('success','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        
        $post->delete();
        return redirect('/blog')->with('success','Post deleted successfully!');
    }
}
