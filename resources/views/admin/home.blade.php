@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <div class="row justify-content-center"> --}}
        {{-- <div class="col-md-8">
                <div class="card">
                    <div class="d-flex card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Login effettuato!') }}
                    </div>
                </div> --}}
        <div class="d-flex border">
            @include('admin.partials.sidebar')
            <div class="bg-dark text-light flex-grow-1">
                <h1>contenuto della dashboard</h1>
                <div class="">
                    <ul class="list-unstyled">
                        <li>Dati dello user</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
