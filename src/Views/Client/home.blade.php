<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets\css\trangchu.css">

</head>

<body>
    <div class="khungto">
        <header>
            <img src="assets\img\q.png" alt="">
        </header>

        <nav>
            <ul>
                <li><a href="home.blade.php">Trang chủ</a></li>
                <li><a href="">Sản phẩm</a></li>
                <li><a href="lienhe.html">Giới Thiệu</a></li>
               
            </ul>
        </nav>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <h1 class="mt-5">Welcome {{ $name }} to my website!</h1>

                <div>
                    @if (!isset($_SESSION['user']))
                    <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                    @endif

                    @if (isset($_SESSION['user']))
                    <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                    @endif
                </div>

            </div>

            <div class="row">

                @foreach ($products as $product)
                <div class="col-md-4 mb-2 mt-2">
                    <div class="card">
                        <a href="{{ url('products/' . $product['id']) }}">
                            <img class="card-img-top" style="max-height: 400px" src="{{ asset($product['img_thumbnail']) }}" alt="Card image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ url('products/' . $product['id']) }}">
                                    {{ $product['name'] }}</a>
                            </h4>

                            <a href="{{ url('cart/add') }}?quantity=1&productID={{ $product['id'] }}" class="btn btn-primary">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
</body>

</html>