<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title', 'Mate')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/Logo.png">

    <!-- Bootstrap + Font Awesome + Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #f4f7fb, #eef2f7);
            margin: 0;
            padding: 0;
        }

        .top-navbar {
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            padding: 12px 30px;
        }

        .navbar-brand img {
            border-radius: 10px;
        }

        .nav-link {
            font-weight: 700;
            color: #333 !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .dropdown-menu {
            border-radius: 14px;
            border: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .dropdown-item {
            font-weight: 600;
        }

        .dropdown-item:hover {
            background: #f3f6fb;
        }

        .page-content {
            min-height: calc(100vh - 170px);
        }

        .footer-box {
            background: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 -2px 15px rgba(0,0,0,0.04);
            margin-top: 30px;
        }

        .footer-box h5 {
            margin: 0;
            font-weight: 700;
            color: #374151;
        }

        @media (max-width: 768px) {
            .top-navbar {
                padding: 10px 15px;
            }

            .navbar-brand img {
                width: 150px;
                height: auto;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light top-navbar">
        <a href="/" class="navbar-brand">
            <img src="/images/logo.PNG" width="190" height="75" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
    </nav>

    <div class="page-content">
        @yield('content')
    </div>

    <div class="footer-box">
        <h5>© 2026 Copyright: <a href="/">mate.com</a></h5>
    </div>

</body>
</html>