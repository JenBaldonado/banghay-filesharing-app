<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css')}}" rel='stylesheet' type="text/css">
    <link href="{{asset('css/grdlvl.css')}}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/js/app.js'])

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span class="name">{{ config('app.name', 'Laravel') }}</span>
                    </a>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="link">
                        <a href="#English">
                            <i class='bx bx-book icon'></i>
                            <span class="text nav-text">English</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Math">
                            <i class='bx bx-math icon'></i>
                            <span class="text nav-text">Math</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Science">
                            <i class='bx bx-atom icon'></i>
                            <span class="text nav-text">Science</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#ESP">
                            <i class='bx bx-street-view icon'></i>
                            <span class="text nav-text">ESP</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#AP">
                            <i class='bx bx-globe icon'></i>
                            <span class="text nav-text">Araling Panlipunan</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Computer">
                            <i class='bx bx-desktop icon'></i>
                            <span class="text nav-text">Computer</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#TLE">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">TLE</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Music">
                            <i class='bx bx-music icon'></i>
                            <span class="text nav-text">Music</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Arts">
                            <i class='bx bx-palette icon'></i>
                            <span class="text nav-text">Arts</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#PE">
                            <i class='bx bx-dumbbell icon'></i>
                            <span class="text nav-text">Physical Education</span>
                        </a>
                    </li>

                    <li class="link">
                        <a href="#Health">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Health</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>

    <body>

        <main class="home">
            @yield('content')
        </main>
        </div>

        <script>
            const body = document.querySelector('body'),
                sidebar = body.querySelector('nav'),
                toggle = body.querySelector(".toggle"),
                searchBtn = body.querySelector(".search-box"),
                modeSwitch = body.querySelector(".toggle-switch"),
                modeText = body.querySelector(".mode-text");


            toggle.addEventListener("click", () => {
                sidebar.classList.toggle("close");
            })

            searchBtn.addEventListener("click", () => {
                sidebar.classList.remove("close");
            })
        </script>
    </body>

</html>