<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <title>Artigos</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="uil uil-newspaper"></i>Artigos</a>
            <form class="d-flex" role="search">
                <button type="submit" class="btn btn-primary" formaction="{{ route('home') }}">Artigos</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h2 class="display-4">Bem-vindo!</h2>
        <p>Este é um projeto de estudo, desenvolvido por <a href="#">Pedro Portes</a>, utilizando o framework
            Laravel, este projeto se caracteriza por ser uma publicadora de artigos e matérias, permitindo aos usuarios
            cadastrados realizar o upload dos artigos escritos e possibilitando a visualização por outros usuários.</p>
        <p>Para visualizar os artigos publicados ou se cadastrar no sistema, clique no botão <strong>Artigos</strong> acima.</p>
    </div>
</body>

</html>
