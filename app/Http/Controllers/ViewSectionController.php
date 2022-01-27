<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Section;


class ViewSectionController extends Controller
{
    public function index(Section $section)
    {

        $posts = Post::where('section_id', $section->id)->get()->sortDesc();

        $data = [
            'posts' => $posts,
            'section' => $section
        ];

        return view('guest.sections.index', $data);
    }

    public function show(Post $post)
    {
        $images = Image::where('post_id', $post->id)->get();

        $data = [
            'post' => $post,
            'images' => $images
        ];

        return view('guest.sections.show', $data);
    }
}
