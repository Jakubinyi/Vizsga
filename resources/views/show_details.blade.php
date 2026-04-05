<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Product Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/images/Logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #f4f6f9;
        }

        .top-lang-bar {
            background: #ffffff;
            padding: 15px 25px;
            text-align: right;
        }

        .main-navbar {
            background: #ffffff;
            padding: 10px 30px;
            margin-bottom: 30px;
        }

        .product-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .product-image {
            padding: 25px;
            text-align: center;
            border-right: 1px solid #eee;
        }

        .product-image img {
            max-height: 250px;
            object-fit: contain;
        }

        .product-content {
            padding: 30px;
        }

        .product-title {
            font-size: 26px;
            font-weight: bold;
        }

        .product-price {
            font-size: 22px;
            color: green;
            margin: 10px 0;
        }

        .desc-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .footer {
            background: #e4eaf0;
            padding: 15px;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>



<!-- Navbar -->
<nav class="navbar navbar-light main-navbar">
    <a href="/">
        <img src="/images/logo.PNG" width="200">
    </a>
</nav>

<div class="container">

    @foreach($data as $row)
    <div class="product-card">
        <div class="row">

            <!-- Image -->
            <div class="col-md-4 product-image">
                <img src="/w/show/{{ $row->id }}">
            </div>

            <!-- Info -->
            <div class="col-md-8 product-content">

                <div class="product-title">
                    Product Name: {{ $row->pro_name_EN }}
                </div>

                <div class="product-price">
                    Price: {{ $row->pro_price }} $
                </div>

                <!-- Description -->
                <div class="desc-box">
                    <h5><b>Description</b></h5>
                    <p>{{ $row->pro_description_EN }}</p>
                </div>

            </div>

        </div>
    </div>
    @endforeach

</div>

<!-- Footer -->
<div class="footer">
    <h5>© 2026 Copyright: <a href="/">mate.com</a></h5>
</div>

</body>
</html>