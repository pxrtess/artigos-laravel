<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('css/article-show.css') }}" rel="stylesheet">
    <title>Artigos</title>
</head>

<body>
    <nav class="bg-body-tertiary d-flex" style="margin-bottom: 2em;">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="uil uil-newspaper"></i>Artigos</a>
        </div>
        @yield('nav')
    </nav>
    @yield('content')
    <footer>
        <div class="container">
            <p>Projeto de aprendizado desenvolvido por <a href="#">Pedro Portes</a></p>
        </div>
    </footer>
</body>

</html>
