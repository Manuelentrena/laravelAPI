<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostCollection;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{

    public function index()
    {
        /* return Post::all()->toJson(); */
        /* $listPost = new PostCollection(Post::all()); */
        /* $listPost = PostResource::collection(Post::latest()->paginate()); */
        $listPost = new PostCollection(Post::latest()->paginate());
        return $listPost;
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        /* return response()->json("hola")->setStatusCode(Response::HTTP_NO_CONTENT); */
        return response([
            'data' => [
                'status' => Response::HTTP_NO_CONTENT,
                'message' => 'post borrado',
            ]
        ]);
    }
}
