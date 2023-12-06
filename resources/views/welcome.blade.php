<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Iconscout Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <title>Artaaigos</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="uil uil-newspaper"></i>Artigos</a>
            <form class="d-flex" role="search">
                <!-- Submit button for login route -->
                <button type="submit" class="btn btn-primary" formaction="{{ route('home') }}">Artigos</button>
                <button type="submit" class="btn btn-primary" formaction="{{ route('register') }}">Registrar</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <h2 class="display-5">Bem-vindo!</h2>
        <p>Este é um projeto de estudo, desenvolvido por <a href="#">Pedro Portes</a>, utilizando o framework
            Laravel, este projeto se caracteriza por ser uma publicadora de artigos e matérias, permitindo aos usuarios
            cadastrados realizar o upload dos artigos escritos e possibilitando a visualização por outros usuários.</p>
        <p>Para se cadastrar no sistema, clique no botão <strong>Registrar</strong> acima.</p>
        <p>Para visualizar os artigos publicados, clique no botão <strong>Artigos</strong> acima.</p>
    </div>
</body>

</html>