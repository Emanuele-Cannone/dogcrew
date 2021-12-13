@extends('layouts.app')
@section('title' ,'Nuova categoria')
@section('content')
  <div id="create">
    <div class="container">
      <div class="row justify-content-center">
  
        <div class="col-md-8 col-lg-6">
          <div class="card">
            <div class="card-header text-center font-weight-bold">
              Nuova categoria
            </div>
            <div class="card-body">
              {{-- form --}}
              <form id="form" action="{{route('ownerType.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
  
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="name">Inserisci nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                </div> 
  
                  <button type="submit" class="btn btn-primary">Salva</button>
  
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
  {{-- <script src="{{ asset('js/message.js') }}"></script> --}}

@endsection
