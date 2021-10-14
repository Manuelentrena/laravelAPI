<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        /* return Post::latest()->paginate(10)->toJson(); */
        return view('index', [
            'posts' => Post::latest()->paginate(9)
        ]);
    }
}
