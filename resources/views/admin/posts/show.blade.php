@extends('layouts.app')

@section('content')
    <div class="container bg-bg-dark">
        <h1>contenuto dello show</h1>

        <div class="card bg-dark" style="width: 18rem;">
            <img src="{{ $post->thumb }}" class="card-img-top" alt="...">
            <div class="card-body text-light">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->subtitle }}</p>
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Modifica</a>
            </div>
        </div>

        <a href='{{ route('admin.posts.index') }}' class="btn btn-primary">Torna Indietro</a>


    </div>
@endsection
