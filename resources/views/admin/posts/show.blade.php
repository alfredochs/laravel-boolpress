@extends('layouts.app')

@section('content')
    <div class="container bg-bg-dark d-flex justify-content-center">
        {{-- <h1>contenuto dello show</h1> --}}

        <div class="card bg-dark" style="width: 18rem;">
            <img src="{{ asset('storage/' . $post->thumb) }}" class="card-img-top" alt="...">
            <div class="card-body text-light">
                <h5 class="card-title">Title: {{ $post->title }}</h5>
                <p class="card-text">Subtitle: {{ $post->subtitle }}</p>
                <div>
                    <span>Author:</span>
                    <h5>{{ Auth::user()->name }}</h5>
                </div>
                <div>
                    <h5>Category: {{ $post->category->name }}</h5>
                </div>
                <div>
                    <span>#</span>
                    @foreach ($post->tags as $tag)
                        <h5 class="btn btn-success btn-sm">{{ $tag->name }}</h5>
                    @endforeach
                </div>

                <div class="d-flex gap-1 justify-content-center">
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Modifica</a>

                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-3">
        <a href='{{ route('admin.posts.index') }}' class="text-light btn btn-primary btn-sm">Torna Indietro</a>
    </div>

    {{-- <div>
            @dump($post)
        </div> --}}


@endsection
