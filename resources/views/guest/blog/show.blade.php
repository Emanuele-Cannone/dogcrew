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
      <p>{!! html_entity_decode($post->body) !!}</p>
    </div>

    <div class="images">
      @foreach ($images as $image)
        <img class="mb-5" src="{{  asset('storage/' .$image->src) }}">
      @endforeach
    </div>

  </div>
  
</div>
@endsection
