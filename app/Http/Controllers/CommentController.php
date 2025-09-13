<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    
    function index(){
        $data = Comment::all();
    
        return view('comment.index',['comments' => $data,"pageTitle" => "Blog" ]);
    }
    
    
    function create(){
        //  Comment::create(    [
        //     'author' => 'Moayed',
        //     'content' => 'this is another test comment',
        //     'post_id'=> 3,
        // ]);

        Comment::factory(100)->create();

        return redirect('/comments');
}




}