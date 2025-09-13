<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        $data = Tag::all();
    
        return view('tag.index',['tags' => $data,"pageTitle" => "Tags" ]);
    }

    
    
    function create(){
        Tag::create(    [
            'title' => 'CSS',
        ]);

        return redirect('/tags');
}

function testManyToMany(){

//     $post1 = Post::find(1);
//     $post2 = Post::find(2);

//     $post1->tags()->attach([1,2]);
//     $post2->tags()->attach([1]);

//     return response()->json([
//         'post1' => $post1->tags,
//         'post2' => $post2->tags
//     ]
//     );

$tag = Tag::find(2);
$tag->posts()->attach( [2] );

return response()->json([
    'tag'=> $tag->title,
    'posts'=> $tag->posts
    ]);
}




}





