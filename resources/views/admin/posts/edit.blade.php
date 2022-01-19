@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="subtitle">Sottotitlo</label>
                <input type="text" name="subtitle" id="subtitle">
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="thumb" name="thumb" id="thumb">
            </div>
            <input type="submit" value="Modifica Dati">
            {{-- button delete --}}
            <form action="">Elimina</form>
        </form>
        <a href="{{ route('admin.posts.index') }}">Torna indietro</a>
    </div>
@endsection
