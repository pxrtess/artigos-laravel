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
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <title>Artaaigos</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="uil uil-newspaper"></i>Artigos</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquise por Artigos e Matérias"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            <form class="d-flex" method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn-profile" type="submit"></button>
            </form>
        </div>
    </nav>
</body>

</html>
