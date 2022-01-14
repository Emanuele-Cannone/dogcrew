<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function indexPost(){

        $posts = Post::all();
        foreach ($posts as $post) {
            $post->images = Image::where('post_id', $post->id)->get();
        }

        $data = [
            'posts' => $posts
        ];

        return response()->json([
            "success" => true,
            "response" => $data
        ]);

    
    }

}