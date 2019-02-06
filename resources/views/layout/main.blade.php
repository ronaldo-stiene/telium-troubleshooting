<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('layout.partials.css')

    <title>Hello, world!</title>
</head>
<body>
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            @yield('content')
        </div>
    </div>
</main>

<footer class="container">
    <p>&copy; Empresa 2019</p>
</footer>

@include('layout.partials.js')

</body>
</html>