@extends('layouts.app')
@section('nav')
<a href="{{ route('articles.index') }}" class="btn btn-secondary" style="margin: 1em;width:300px;" >Retornar para a pagina inicial.</a>
@endsection
@section('content')
<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{route('articles.store')}}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" name="user_name" value="{{Auth::user()->name}}">
        <label for="image" class="form-label">Adcione uma imagem para o artigo ou matéria.</label>
        @error('image')
            <strong class="invalid-feedback d-inline">{{ $message }}</strong>
        @enderror
        <input type="file" name="photo" placeholder="Imagem" class="form-control mb-3">
        @error('title')
            <strong class="invalid-feedback d-inline">{{ $message }}</strong>
        @enderror
        <input type="text" name="title" placeholder="Título" class="form-control mb-3">
        @error('description' )
            <strong class="invalid-feedback d-inline">{{ $message }}</strong>
        @enderror
        <textarea name="description" rows="10" placeholder="Descrição" class="form-control mb-3"></textarea>
        <input type="submit" value="Enviar" class="btn btn-primary btn-block mb-3">
    </form>
</div>
@endsection