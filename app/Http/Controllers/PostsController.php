<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post', ['posts' => $posts]);
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('post-detail', ['posts' => $posts]);
    }
}
