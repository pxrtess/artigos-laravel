@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="{{ route('articles.update', $article) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
            <label for="image" class="form-label">Altere a imagem do artigo ou matéria.</label>
            @error('image')
                <strong class="invalid-feedback d-inline">{{ $message }}</strong>
            @enderror
            <input type="file" name="photo" placeholder="Imagem" class="form-control mb-3" value="{{old('photo', $article->photo)}}">
            @error('title')
                <strong class="invalid-feedback d-inline">{{ $message }}</strong>
            @enderror
            <input type="text" name="title" value="{{ old('title', $article->title) }}" placeholder="Título"
                class="form-control mb-3">
            @error('description')
                <strong class="invalid-feedback d-inline">{{ $message }}</strong>
            @enderror
            <textarea name="description" rows="10" placeholder="Descrição" class="form-control mb-3">{{ $article->body }}</textarea>
            <input type="submit" value="Enviar" class="btn btn-primary btn-block mb-3">
        </form>
    </div>
@endsection

