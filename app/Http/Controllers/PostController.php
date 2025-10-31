<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:10',
        ]);

        return redirect('/post/create')->with('success', 'Post berhasil disimpan!');
    }
}
