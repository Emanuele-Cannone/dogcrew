@php
    use App\Models\Section;
@endphp


@extends('layouts.app')
@section('title')
@section('content')


<div id="indexPost">

  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
          <li class="breadcrumb-item active">Posts</li>
        </ol>
    </nav>
    <div class="new_post d-flex justify-content-end">
      <a href="{{ route('post.create') }}" class="btn btn-success text-capitalize">nuovo post</a>
    </div>
    <div class="row d-flex justify-content-center mt-5">
      <form class="row" action="{{ route('post.index') }}" method="GET">
        @csrf
        @method('GET')
        <div class="d-flex justify-content-center">
          <div>
            <select class="form-select text-capitalize" id="autoSizingSelect" name="section" required aria-label="Default select example">
              <option value="all">Tutte le Sezioni</option>
              @foreach ($sections as $section)
                  <option value="{{ $section->id }}" {{ $section_selected == $section->id ? 'selected' : '' }}>{{ $section->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-auto ms-3">
            <button class="btn btn-primary text-capitalize"><i class="fas fa-filter"></i></button>
          </div>
        </div>
      </form>
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
              <p class="">Sezione 

                @php
                  $section = Section::where('id', $post->section_id)->first();
                @endphp
                
                {{ $section->name }}</p>
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
