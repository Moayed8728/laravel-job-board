<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogCommentRequest;
use Illuminate\Http\Request;
use App\Models\Comment;
 

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::cursorPaginate(10);
    
        return redirect('/blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

         return redirect ('/blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCommentRequest $request)
    {
        $comment = new Comment();
        $comment->author = $request->input('author');
        $comment->content = $request->input('content');
        $comment->post_id = $request->input('post_id');
        
        $comment->save();
        
        return redirect('/blog')->with('success','Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comment.show',['comment'=> $comment,'pageTitle' => 'view comment' ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $comment = Comment::findOrFail($id);
        // return view('comment.edit',['comment'=> $comment,'pageTitle'=> 'Edit Comment']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogCommentRequest $request, string $id)
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