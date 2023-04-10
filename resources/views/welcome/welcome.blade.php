<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/welcome/welcome.css')}}"> --}}
    @vite('resources/css/welcome/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{route('user.games.index')}}"><p>Continue To Page<i class="bi bi-door-open"></i></p></a>
    </header>
    <main>
        <section class="main-container">
            <div class="cart cart-imgOne"></div>
            <div class="cart cart-imgTwo"></div>
            <div class="cart cart-imgThree"></div>
            <div class="cart cart-imgFour"></div>
            <div class="cart cart-imgFive"></div>
        </section>
    </main>
    <footer>
        <div
             class="text-center p-3">
          © 2023 Copyright: games_project.test
        </div>
    </footer>
</body>
</html>