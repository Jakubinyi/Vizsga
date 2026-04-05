<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Mate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/Logo.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

        .hero-section {
            text-align: center;
            padding: 60px 20px 30px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 800;
            color: #1f2937;
            margin-bottom: 10px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #6b7280;
            max-width: 700px;
            margin: 0 auto 20px;
        }

        .title-line {
            width: 120px;
            height: 4px;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            margin: 20px auto 0;
            border-radius: 10px;
        }

        .products-section {
            padding: 20px 0 60px;
        }

        .product-card {
            background: #ffffff;
            border: none;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            transition: all 0.35s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 14px 30px rgba(0,0,0,0.14);
        }

        .product-image-box {
            background: #f8fafc;
            padding: 20px;
            text-align: center;
            height: 260px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image-box img {
            max-height: 220px;
            max-width: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image-box img {
            transform: scale(1.05);
        }

        .product-body {
            padding: 22px;
            text-align: center;
        }

        .product-name {
            font-size: 20px;
            font-weight: 800;
            color: #1f2937;
            margin-bottom: 12px;
            min-height: 48px;
        }

        .ratings {
            color: #fbbf24;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .view-btn {
            display: inline-block;
            padding: 10px 22px;
            border-radius: 30px;
            background: linear-gradient(to right, #007bff, #00b4db);
            color: white !important;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .view-btn:hover {
            opacity: 0.9;
            transform: scale(1.03);
            text-decoration: none;
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
            .hero-title {
                font-size: 34px;
            }

            .hero-subtitle {
                font-size: 16px;
            }

            .product-image-box {
                height: 220px;
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

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <i class="fas fa-screwdriver mr-2"></i>Products
                    </a>
                    <div class="dropdown-menu">
                        @foreach($data as $row)
                            <a href="/show_details/{{ $row->id }}" class="dropdown-item">{{ $row->pro_name_EN }}</a>
                        @endforeach
                    </div>
                </li>

                @if(!auth()->user()==null)
                    @if(auth()->user()->isAdmin())
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <i class="fas fa-feather-alt mr-2"></i>Settings
                            </a>
                        </li>
                    @endif
                @endif
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
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
                                Logout
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

    <div class="container">
        <div class="hero-section">
            <h1 class="hero-title">Our Products</h1>
            <p class="hero-subtitle">
                Explore our collection of high-quality products with a clean and modern shopping experience.
            </p>
            <div class="title-line"></div>
        </div>

        <div class="products-section">
            <div class="row">
                @foreach($data as $row)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="product-card">

                            <div class="product-image-box">
                                <a href="/show_details/{{ $row->id }}">
                                    <img src="/w/show/{{ $row->id }}?size=pdhi" alt="{{ $row->pro_name_EN }}">
                                </a>
                            </div>

                            <div class="product-body">
                                <div class="product-name">{{ $row->pro_name_EN }}</div>

                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>

                                <a href="/show_details/{{ $row->id }}" class="view-btn">
                                    View Details
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="footer-box">
        <h5>© 2026 Copyright: <a href="/">mate.com</a></h5>
    </div>

</body>
</html>