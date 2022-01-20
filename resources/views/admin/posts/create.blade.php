@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
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
            <div>
                <label for="category_id">Categoria</label>
                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Crea">
            {{-- button delete --}}
        </form>
        <a href="{{ route('admin.posts.index') }}">Torna indietro</a>
    </div>
@endsection
