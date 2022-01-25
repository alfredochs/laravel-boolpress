@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="form-group">
            @csrf
            @method('put')
            <div class="row">
                <div class="col">
                    <label for="title">Titolo</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
                </div>
                <div class="col">
                    <label for="subtitle">Sottotitlo</label>
                    <input class="form-control" type="text" name="subtitle" id="subtitle" value="{{ $post->subtitle }}">
                </div>
            </div>

            <div class="my-3">
                <label for="thumb">Immagine</label>
                <input class='form-control' type="thumb" name="thumb" id="thumb" value="{{ $post->thumb }}">
            </div>

            <div>

                <div>
                    <label for="tags">Tags</label>
                    <select class="form-select" name="tags[]" id="tags" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" @if ($post->tags->contains($tag)) selected @endif>{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="my-3">
                <input class="btn btn-primary" type="submit" value="Modifica Dati">
                <a class="btn btn-outline-success" href="{{ route('admin.posts.index') }}" role="button"> Torna
                    indietro</a>
            </div>


        </form>
    </div>

    </div>
@endsection
