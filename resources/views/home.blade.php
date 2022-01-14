@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m_120_0">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-capitalize card-text">ciao {{ Auth::user()->name }}</p> 
                    <p clas="">adesso dal menù in alto a destra accedi direttamente alla gestione delle varie sezioni.</p> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
