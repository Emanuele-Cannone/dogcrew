@extends('layouts.app')

@section('title')

@section('script')
  {{-- <script src="{{ asset('js/post.js') }}"></script> --}}
@endsection

@section('cdn')
@endsection

@section('content')
<div id="createPost">
  <div class="container">
    <div class="row justify-content-center m_tb_40">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <div class="card-header text-center font-weight-bold">
            Nuovo post
          </div>
          <div class="card-body">
            {{-- form --}}
            <form id="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('POST')

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title" placeholder="Inserisci titolo">
                  <small>* campo obbligatorio</small>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="small" placeholder="Inserisci sottotitolo">
                  <small>* campo obbligatorio</small>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="body" class="form-control" rows="10" placeholder="Inserisci post"></textarea>
                  <small>* campo obbligatorio</small>
                </div>
              </div>

              <div class="form-group row file_manager">
                <div class="col-md-12">
                <label for="image">Inserisci immagine di copertina</label>
                <input type="file" class="form-control-file" id="image" name="cover_image">
                </div>
              </div>

              <div class="form-group row file_manager">
                <div class="col-md-12">
                <label for="images">Inserisci immagini del tuo post</label>
                <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                </div>
              </div>

              
              <button type="submit" class="btn btn-success text-capitalize">crea post</button>

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
