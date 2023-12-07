@extends('layouts.app')
@section('css')
    <link href="{{ asset('css/article-show.css') }}" rel="stylesheet">
@endsection
@section('nav')
<a href="{{ route('articles.index') }}" class="btn btn-secondary" style="margin: 1em;width:300px;" >Retornar para a pagina inicial.</a>@endsection
@section('content')
    <section class="container d-flex article">
        <div class="col-md-10 mx-auto">
            <h5>{{ $article->title }}</h5>
            <img src="{{ asset('images/' . $article->photo) }}" class="card-img-top" alt="...">
            <p>{{ $article->body }}</p>
            <p class="author-name">Autor: {{ $article->user_name }}</p>
        </div>
    </section>
@endsection
