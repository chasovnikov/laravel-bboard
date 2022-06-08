<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">

    <title>
        @yield('title') :: Объявления
    </title>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('index') }}" class="navbar-brand mr-auto ">Главная</a>

            @guest
            <a href="{{ route('register') }}" class="nav-item nav-link ">Регистрация</a>
            <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
            @endguest

            @auth
            <a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
            <form action="{{ route('logout') }}" method="POST" class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>
            @endauth

        </nav>

        <h1 class="my-3 text-center">Объявления</h1>

        @yield('main')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>



</body>

</html>