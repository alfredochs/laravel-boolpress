@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col">
                    <label for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>

                <div class="col">
                    <label for="subtitle">Sottotitlo</label>
                    <input class="form-control" type="text" name="subtitle" id="subtitle">
                </div>

            </div>

            <div class="">
                <label for="thumb">Immagine</label>
                <input class="form-control" type="file" name="thumb" id="thumb">
            </div>

            <div class="row">
                <div class="col">

                    <label for="category_id">Categoria</label>
                    <select class="form-select" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="tags">Tags</label>
                    <select class="form-select" name="tags[]" id="tags" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="btn-group   !spacing" role="group" aria-label="Basic example">
                <input class="btn btn-success" type="submit" value="Crea">
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">Torna indietro</a>
            </div>

    </div>
@endsection
