@extends('layouts.app')
@section('title')
@section('content')
<div id="showPost">
  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Blog</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
      </ol>
    </nav>
    <div class="row justify-content-center m_tb_40">

      {{-- form --}}
      <form id="form" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="col-md-8 col-lg-6">
          <div class="card card_custom">
            <img src="{{ asset('storage/' .$post->cover_image) }}" class="card-img-top" alt="cover_image">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">
                <p class="">{{ $post->small }}</p>
                <p class="">{{ $post->body }}</p>
              </p>
              <div class="d-flex justify-content-around">
                <a href="{{route('post.edit', $post->id)}}" class="btn btn-warning text-capitalize">modifica post</a>
                <a type="button" class="btn btn-danger text-capitalize" data-bs-toggle="modal" data-bs-target="#deletePost">elimina post</a>
              </div>
            </div>
          </div>
        </div>
      </form>




      <!-- Modal -->
      <div class="modal fade" id="deletePost" tabindex="-1" aria-labelledby="delete_post" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-capitalize" id="delete_post">elimina post "{{ $post->title }}"</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              L'azione è irreversibile
            </div>
            <div class="modal-footer">
                <form action="{{ route('post.destroy', $post->id) }}" method='post'>
                  @csrf
                  @method('delete')
                  <div class="form-group">
                      <input class="btn btn-danger" value="Elimina Post" type="submit">
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
@endsection
