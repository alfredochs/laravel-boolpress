@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex border">
            <div class="w-25 bg-dark text-light">
                <h1>Sidebar</h1>
                <div class="d-flex">
                    <ul class="list-unstyled">
                        <div class="p-2">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                                <li><a href='{{ route('admin.posts.index') }}'>Posts</a></li>
                                <li><a href="{{ route('admin.posts.create') }}" class="btn btn-light">Crea Post</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="bg-dark text-light flex-grow-1 d-flex">
                @foreach ($posts as $post)
                    <div class="card bg-dark" style="width: 18rem;">
                        <img src="{{ $post->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            {{-- <h5>{{ $post->category->name }}</h5> --}}
                            {{-- <p class="card-text">{{ $post->subtitle }}</p> --}}
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
