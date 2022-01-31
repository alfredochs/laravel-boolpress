@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex border">

            @include('admin.partials.sidebar')

            <div class="row flex-grow-1 text-light bg-dark">
                @foreach ($posts as $post)
                    <div class="col py-3">
                        <div class="card h-100 bg-dark" style="width: 18rem;">
                            <img src="{{ asset('storage/' . $post->thumb) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                {{-- <h5>{{ $post->category->name }}</h5> --}}
                                {{-- <p class="card-text">{{ $post->subtitle }}</p> --}}
                                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection
