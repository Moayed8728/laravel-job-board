<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $data = Post::cursorPaginate(5);
    
        return view('post.index',['posts' => $data,"pageTitle" => "Blog" ]);
    }

    
    function show($id){
        $post = Post::find($id);

        return view('post.show',['post'=> $post,"pageTitle" => $post->title ]);
    }
    
    function create(){
        // $post = Post::create(    [
        //     'title' => 'My find unique post',
        //     'body' => 'This is to test find',
        //     'author' => 'Moayed',
        //     'published' => true,
        // ]);
        Post::factory(1000)->create();

        return redirect('/blog');
}

function delete(){
    post::destroy(3);
}



}