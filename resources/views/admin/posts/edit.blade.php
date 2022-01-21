@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div>
                <label for="subtitle">Sottotitlo</label>
                <input type="text" name="subtitle" id="subtitle" value="{{ $post->subtitle }}">
            </div>

            <div>
                <label for="thumb">Immagine</label>
                <input type="thumb" name="thumb" id="thumb" value="{{ $post->thumb }}">
            </div>
            <div>
                <input type="submit" value="Modifica Dati">
                <a href="{{ route('admin.posts.index') }}">Torna indietro</a>
            </div>

            {{-- <div class="form-group">
                <label class="form-label">Tag</label>
                <select name="tags[]" class="form-control" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" @if ($post->tags->contains($tag)) selected @endif>{{ $tag->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

            <div>
                <label for="tags">Tags</label>
                <select name="tags[]" id="tags" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" @if ($post->tags->contains($tag)) selected @endif>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>

    </div>
@endsection
