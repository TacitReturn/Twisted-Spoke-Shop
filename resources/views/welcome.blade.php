<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ secure_asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ secure_asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ secure_asset('img/favicon.png') }}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="Twisted Spoke CBD Shop">
    <meta property="og:description" content="A resourceful online CBD shop.">
    <meta property="og:image" content="">
    <meta property="og:url" content="https://rudge-software.com">
    <meta name="twitter:card" content="">
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-light" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="index.html">
{{--                <img class="logo-dark" src="{{ secure_asset('img/logo-dark.png') }}" alt="logo">--}}
{{--                <img class="logo-light" src="{{ secure_asset('img/logo-light.png') }}" alt="logo">--}}
                Twisted Spoke
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <nav class="nav nav-navbar">
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="#">Contact</a>
                <a class="nav-link" href="#">CBD Blog</a>
                <a class="nav-link" href="#">Help</a>
            </nav>
        </section>

        <a class="btn btn-sm btn-round btn-dark mr-2" href="readme.html">Register</a>
        <a class="btn btn-sm btn-round btn-dark" href="readme.html">Login</a>

    </div>
</nav><!-- /.navbar -->


<!-- Header -->
<header class="header text-white pt-12 pb-10" style="background-image: linear-gradient(-45deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <h1 class="display-4">
            Stwisted Spoke CBD &middot;
        </h1>
        <p class="lead-2 mt-6">
            This is a starting point for your next awesome project. The skeleton is ready, just populate it.
        </p>
    </div>
</header><!-- /.header -->


<!-- Main Content -->

<!-- Main Content -->
<main class="main-content">

    <section class="section bg-gray">
        <div class="container">
            <div class="row gap-y">

                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <span class="badge badge-pill badge-primary badge-pos-left">New</span>
                            <img src="{{ secure_asset('img/products/cbd1.jpeg') }}" alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price">$160</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <div class="product-media">
                            <span class="badge badge-pill badge-primary badge-pos-left">New</span>
                            <div class="slider-dots-inside" data-provide="slider" data-dots="true">
                                <a href="item.html">
                                    <img src="{{ secure_asset('img/products/cbd2.webp') }}" alt="product">
                                </a>
{{--                                <a href="item.html">--}}
{{--                                    <img src="../assets/img/shop/13.jpg" alt="product">--}}
{{--                                </a>--}}
{{--                                <a href="item.html"><img src="../assets/img/shop/14.jpg" alt="product"></a>--}}
                            </div>
                        </div>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price">$299</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <span class="badge badge-pill badge-success badge-pos-right">-25%</span>
                            <img
                                style="height: 233px; width: 500px; object-fit: cover;"
                                src="{{ secure_asset('img/products/cbd3.webp') }}"
                                alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price"><s>$299</s> $224</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <span class="badge badge-pill badge-success badge-pos-right">-20%</span>
                            <img src="{{ secure_asset('img/products/cbd4.jpeg') }}" alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price"><s>$99</s> $79</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <img src="{{ secure_asset('img/products/cbd5.jpeg') }}" alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price">$189</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <div class="product-media">
                            <div class="slider-dots-inside" data-provide="slider" data-dots="true">
                                <a href="item.html">
                                    <img
                                        style="height: 233px; width: 500px; object-fit: cover;"
                                        src="{{ secure_asset('img/products/cbd6.jpeg') }}"
                                        alt="product">
                                </a>
{{--                                <a href="item.html">--}}
{{--                                    <img src="../assets/img/shop/23.jpg" alt="product">--}}
{{--                                </a>--}}
                            </div>
                        </div>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price">$128</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <img
                                style="height: 233px; width: 500px; object-fit: cover;"
                                src="{{ secure_asset('img/products/cbd7.jpeg') }}"
                                alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price">$52</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <img
                                style="height: 233px; width: 500px; object-fit: cover;"
                                src="{{ secure_asset('img/products/cbd8.jpeg') }}"
                                alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Product</a></h6>
                            <div class="product-price">$677</div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xl-4">
                    <div class="product-3 mb-3">
                        <a class="product-media" href="item.html">
                            <span class="badge badge-pill badge-success badge-pos-right">-33%</span>
                            <img
                                style="height: 233px; width: 500px; object-fit: cover;"
                                src="{{ secure_asset('img/products/cbd9.jpeg') }}"
                                alt="product">
                        </a>

                        <div class="product-detail">
                            <h6><a href="#">Products</a></h6>
                            <div class="product-price"><s>$139</s> $99</div>
                        </div>
                    </div>
                </div>

            </div>


            <nav class="mt-7">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">
                            <span class="fa fa-angle-left"></span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </li>
                </ul>
            </nav>


        </div>
    </section>

</main>



<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="index.html"><img src="assets/img/logo-dark.png" alt="logo"></a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">
                    <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
                    <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Blog</a>
                    <a class="nav-link" href="#">Policy</a>
                    <a class="nav-link" href="#">Contact</a>
                </div>
            </div>

        </div>
    </div>
</footer><!-- /.footer -->


<!-- Scripts -->
<script src="{{ secure_asset('js/page.min.js') }}"></script>
<script src="{{ secure_asset('js/script.js') }}"></script>

</body>
</html>
