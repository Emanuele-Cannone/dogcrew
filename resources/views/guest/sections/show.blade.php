@extends('layouts.app')
@section('title')

@section('script')
  <script src="{{ asset('js/blog.js') }}"></script>
@endsection

@section('cdn')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')

<div id="blogShow">

  <div class="container text-white">

    <div class="bg_image mb-5">
      <h1 class="text-center mb-3">{{ $post->title }}</h1>
      <p>{!! nl2br($post->body) !!}</p>
    </div>

    @if ($post->video)

      <div class="d-flex justify-content-center pb-4">
        <iframe src="https://www.youtube.com/embed/<?php echo $post->video ?>?enablejsapi=0" frameborder="0" height="360"></iframe>
      </div>

    @endif

    <div class="images">
      @foreach ($images as $image)
        <img class="mb-5" src="{{  asset('storage/' .$image->src) }}">
      @endforeach
    </div>

  </div>
  
</div>
@endsection
