@extends('layouts.app')
@section('title')
@section('content')


<div id="indexPost">

  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
      <div class="new_post d-flex justify-content-end">
        <a href="{{ route('post.create') }}" class="btn btn-success text-capitalize">nuovo post</a>
      </div>
    </div>
  


    <div class="row justify-content-center m_tb_40">
      <div class="col-md-8 col-lg-6">

        @foreach ($posts as $post)

        <div class="card card_custom mt-4">
          <img src="{{ asset('storage/' .$post->cover_image) }}" class="card-img-top" alt="cover_image">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">
              <p class="">{{ $post->small }}</p>
              <p class="">Post del {{ date_format($post->created_at, 'd-m-y') }}</p>
            </p>
            <a href="{{route('post.show', $post->id)}}" class="btn btn-success text-capitalize">vedi post</a>
          </div>
        </div>

        @endforeach
      </div>

    </div>
  </div>
  
</div>
@endsection
