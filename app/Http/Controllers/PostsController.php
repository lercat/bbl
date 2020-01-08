<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construc()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'legende' => 'required',
            'description' => 'required',
            'image' => ['required', 'image'],
        ]);
        dd(request()->all());
    }
}



