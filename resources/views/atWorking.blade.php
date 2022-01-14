@extends('layouts.app')
@section('title')
@section('content')

  <div id="atWorking" class="m_tb_80">

    <div class="container text-center">

      <h2>In aggiornamento</h2>
      <p class="mt-4">per darti la migliore esperienza stiamo costruendo questa pagina con tutte le attenzioni che ci piace dare...</p>
      <p class="mt-4">intanto ti consiglio di leggere la sezione <a href="{{ url('guest/blog') }}">blog</a> dove troverai molti consigli e spunti!</p>
      <p class="mt-4">A tra pochissimo 😃</p>

      <img src="{{ asset('images/onWorking.jpg') }}" alt="cover_on_working">


    </div>

  </div>

@endsection
