<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sections = Section::all();
        $section_selected = $request['section'];
        
        if($section_selected == 'all' || !$section_selected){
            $posts = Post::all()->sortDesc();
        } else {
            $posts = Post::where('section_id', $section_selected)->get()->sortDesc();
        };

        $data = [
            'posts' => $posts,
            'sections' => $sections,
            'section_selected' => $section_selected
        ];

        return view('user.post.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $sections = Section::all();

        $data = [
            'sections' => $sections
        ];

        return view('user.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $file = $data['cover_image'];
        $storage_path = Storage::put('post_images', $file);
        $data['cover_image'] = $storage_path;

        $newPost = new Post;
        
        $newPost->title = $data['title'];
        $newPost->small = $data['small'];
        $newPost->body =  $data['body'];
        $newPost->section_id =  $data['section_id'];
        $newPost->cover_image = $data['cover_image'];
        $newPost->video = $data['video'];
        $newPost->save();

        if (array_key_exists('images', $data)) {

            foreach ($data["images"] as $image) {
                $newImage = new Image;
                $newImage->post_id = $newPost->id;
                $file = $image;
                $storage_path = Storage::put('post_images', $file);
                $image = $storage_path;
                $newImage->src = $image;
                $newImage->save();
            }
        }

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $images = Image::where('post_id', $post->id)->get()->toArray();

        $data = [
            'post' => $post,
            'images' => $images
        ];

        return view('user.post.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $images = Image::where('post_id', $post->id)->get();


        $data = [
            'post' => $post,
            "images" => $images
        ];

        return view('user.post.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        if(isset($data['cover_image'])){
            $file = $data['cover_image'];
            $storage_path = Storage::put('post_images', $file);
            $data['cover_image'] = $storage_path;
        }


        if(isset($data['image'])){
            $file = $data['cover_image'];
            $storage_path = Storage::put('post_images', $file);
            $data['cover_image'] = $storage_path;
            $post->cover_image = $data['cover_image'];
        }

        $post->title = $data['title'];
        $post->small = $data['small'];
        $post->body = $data['body'];
        $post->video = $data['video'];


        $post->update($data);

        if (array_key_exists('images', $data)) {

            foreach ($data["images"] as $image) {
                $newImage = new Image;
                $newImage->post_id = $post->id;
                $file = $image;
                $storage_path = Storage::put('post_images', $file);
                $image = $storage_path;
                $newImage->src = $image;
                $newImage->save();
            }
        }

        if (array_key_exists('deleteImg', $data)) {

            foreach ($data["deleteImg"] as $image) {
                $image = Image::where('id', $image);
                $image->delete();
            };
            
        }

        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $images = Image::where('post_id', $post->id)->get();

        foreach ($images as $image) {
            $image->delete();
        }

        $post->delete();

        return redirect()->route('post.index');
    }
}
