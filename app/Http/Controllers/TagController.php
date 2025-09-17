<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Tag::cursorPaginate(5);
    
        return view('tag.index',['tags' => $data,'pageTitle' => 'Tags' ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        Tag::factory(10)->create();
        return view('tag.create',['pageTitle' => 'Tags'  ]);

         
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
        $tag = Tag::findOrFail($id);
        return view('tag.show',['tag'=> $tag,'pageTitle' => 'view tag' ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $tag = Tag::findOrFail($id);
        return view('tag.edit',['tag'=> $tag,'pageTitle'=> 'Edit tag']);
    
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
