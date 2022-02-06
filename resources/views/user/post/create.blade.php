@extends('layouts.app')

@section('title')

@section('script')
  <script src="{{ asset('js/post.js') }}"></script>
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

              <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Sezione</label>
                <select class="form-select text-capitalize" id="validationTooltip04" name="section_id" required aria-label="Default select example">
                  <option selected disabled value="0">Scegli Sezione</option>
                  @foreach ($sections as $section)
                      <option value="{{ $section->id }}">{{ $section->name }}</option>
                  @endforeach
                </select>
              </div>

              {{-- <div id="editor">
                <p>bello</p>
              </div> --}}
              
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="title" placeholder="Inserisci titolo">
                  <small>* campo obbligatorio</small>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" name="small" placeholder="Inserisci sottotitolo">
                  <small></small>
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
                <label for="video">Inserisci key video youtube</label>
                <input type="text" class="form-control-file" id="video" name="video" placeholder="Es. ...youtu.be/KEY">
              </div>
            </div>

              <div class="form-group row file_manager">
                <div class="col-md-12">
                <label for="images">Inserisci immagini del tuo post</label>
                <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                </div>
              </div>

              
              <button type="submit" class="btn btn-success text-capitalize">crea post</button>
              {{-- <button v-on:click="myMethod()" class="btn btn-success text-capitalize">crea post</button> --}}

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
