@extends('layouts.app')
@section('title')

@section('script')
  <script src="{{ asset('js/blog.js') }}"></script>
@endsection

@section('cdn')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')

<div id="blog">

  <div class="container">

    <div class="card_container">

      @foreach ($posts as $post)
          
      <div class="card card-blog mt-5">
        <a href="{{ url('guest/blog', $post->id) }}"> 
          <div class="card-image">
              <img class="img" src="{{ asset('storage/' .$post->cover_image) }}">
              <div class="card-caption text-center"> {{ $post->title }} </div>
              <div class="ripple-cont"></div>
          </div>
        </a>
          <div class="table">
              <p class="card-description" id="text_post_white">{{ $post->small }}</p>
          </div>
      </div>
      
      @endforeach

    
    </div>

  
</div>
@endsection
