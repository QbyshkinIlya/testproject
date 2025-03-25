<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white bg-dark text-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal text-black">hyperK</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-black" href="/">Главная</a>
            <a class="p-2 text-black" href="/about">Про нас</a>
        </nav>
        <a class="btn btn-warning" href="/review">Отзывы</a>
    </div>
    <div class="container">
        @yield('main_content')
    </div>


</body>
</html>
