<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="" >
    <div  id="app">
        <nav  class="navbar navbar-expand-md border-bottom  bg-opacity-0  " >
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/public/build/assets/img/L.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="fs-4 nav-link" href="{{ route('catalog')}}" >
                                Каталог
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="{{ route('aboutUs')}}">О нас</a>
                        </li>
                    </ul>
                </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto ">

                        <div class="container d-flex align-items-center">
                            <a class="navbar-brand " href="{{route('cart') }}">
                                <img  class="img-fluid" src="/public/build/assets/img/basketBlack.png" alt="" width="40" height="24">
                                <span class="">{{count((array) session('cart'))}} </span>
                            </a>

                            <a class="navbar-brand" href="{{ route('love') }}">
                                <img class="img-fluid" src="/public/build/assets/img/heartBlack.png" alt="" width="32" height="26">
                            </a>
                        </div>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5 min-vh-100">
            @if(session('success'))
<div class="alert alert-success"><div class="  container">{{session('success')}}</div></div>

            @endif
            @yield('content')
        </main>
        <footer class="text-center text-lg-start bg-body-tertiary text-muted ">

            <section class="border-top">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 style="color: #156800" class="text-uppercase fw-bold mb-4 ">
                                Tea Essence
                            </h6>
                            <p>
                                Наша цель - дать возможность каждому клиенту насладиться неповторимым вкусом и ароматом чая,
                                который обладает уникальными качествами, благодаря особому уходу за кустарником и тщательному отбору листьев.
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 style="color: #156800" class="text-uppercase fw-bold mb-4">Контакты</h6>
                            <p>Россия, Самара, улица Братьев Коростелёвых, 81</p>
                            <p>
                                TeaEssence@gmail.com
                            </p>
                            <p> +7 902 000 00 00</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2024 Copyright:
                <a  class="text-reset fw-bold" href="#">TeaEssence.ru</a>
            </div>
        </footer>

    </div>

</body>
</html>
