@extends('layouts.app')

@section('title')

@section('script')
  <script src="{{ asset('js/editPost.js') }}"></script>
@endsection

@section('cdn')
@endsection

@section('content')
<div id="editPost">
  <div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Posts</a></li>
        <li class="breadcrumb-item"><a href="{{ route('post.show', $post->id) }}" class="text-capitalize">{{ $post->title }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Modifica "{{ $post->title }}"</li>
      </ol>
    </nav>
    <div class="row justify-content-center m_tb_40">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <div class="card-header text-center font-weight-bold">
            {{$post->title}} del {{ date_format($post->created_at, 'd-m-Y') }}
          </div>
          <div class="card-body">
            {{-- form --}}
            <form id="form" action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title" placeholder="Inserisci titolo" value="{{$post->title}}">
                  <small>* campo obbligatorio</small>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="small" placeholder="Inserisci sottotitolo" value="{{$post->small}}">
                  <small>* campo obbligatorio</small>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                    <textarea name="body" class="form-control" rows="10" placeholder="Inserisci post">{{ $post->body }}</textarea>
                  <small>* campo obbligatorio</small>
                </div>
              </div>


              

              <div class="form-group row file_manager">
                <div class="col-md-12">
                  <label for="image">Modifica immagine di copertina</label>
                  <input type="file" class="form-control-file" id="image" name="cover_image" value="{{ $post->cover_image }}">
                  <img src="{{ asset('storage/' .$post->cover_image) }}" alt="immagine_di_copertina">
                </div>
              </div>

              <div class="form-group row file_manager">
                <div class="col-md-12">
                  <label for="images">Modifica immagini del tuo post</label>
                  <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                  <div class="d-flex flex-column">
                    @foreach ($images as $k => $image)
                    <div class="d-flex checkbox">
                      <img src="{{ asset('storage/' .$image->src) }}" alt="immagine_{{ ++$k }}" style="height: 100%; width: 90%;">
                      <label class="container_checkbox">
                        <input type="checkbox" class="deleteImages" name="deleteImg[]" value="{{ $image->id }}">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>

              
              <button type="submit" class="btn btn-success text-capitalize">modifica post</button>

            </form>
          </div>
        </div>
      </div>

      {{-- validation --}}
      @if ($errors->any())
        <div class="col-12 d-flex justify-content-center row">
          <div class="alert alert-danger col-md-8 col-lg-6">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif

    </div>
  </div>
</div>
@endsection
