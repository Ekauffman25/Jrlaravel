<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\http\JsonResponse;

class PostsController extends Controller
{
    // Controller methods here
    public function index(): JsonResponse
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    public function create(): JsonResponse
    {
        // Return a response for creating a post (e.g., a form)
        return response()->json(['message' => 'Display form for creating a post']);
    }
}
