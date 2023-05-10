<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Самый крутой блог</title>
    <link rel="icon" href="{{ asset('img/icons8.png') }}" type="image/png">

    <link rel="stylesheet" href=" {{asset('vendors/bootstrap/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('vendors/fontawesome/css/all.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('vendors/themify-icons/themify-icons.css')}} ">
    <link rel="stylesheet" href=" {{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href=" {{asset('vendors/owl-carousel/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('vendors/owl-carousel/owl.carousel.min.css')}} ">

    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
</head>
<body>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                @auth
                    <a class="navbar-brand logo_h" href=" {{ route('profile.index') }} "><img src="img/cat-logo.svg" width="88px" alt=""><span style="font-size: 18px; position: relative; right: 10px; top: 2px; color: #ff9907">Профиль</span></a>
                @endauth
                @guest
                    <a class="navbar-brand logo_h" href=" {{ route('login') }} "><img src="img/cat-logo.svg" width="88px" alt=""><span style="font-size: 18px; position: relative; right: 10px; top: 2px; color: #ff9907">Войти</span></a>
                @endguest
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item active"><a class="nav-link" href=" {{ route('home.index') }} ">Домашняя</a></li>
                        <li class="nav-item"><a class="nav-link" href=" {{ route('posts.index') }} ">Посты</a>
                        <li class="nav-item"><a class="nav-link" href=" {{ route('contact.index') }} ">Контакты</a></li>
                        <li class="nav-item"><a class="nav-link" href=" /about ">О нас</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-social" style="flex-wrap: nowrap">
                        <li><a href="https://vk.com/vvoronkov4"><img src=" {{ asset('img/icons-vk.svg') }} " width="30px" alt=""></a></li>
                        <li><a href="https://t.me/mge410"><img src=" {{ asset('img/icons-tg.svg') }} " width="30px" alt=""></a></li>
                        <li><a href="https://discord.gg/GHu9e7et"><img src=" {{ asset('img/icons-discord.svg') }} " width="30px" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

@yield('content')

<!--================ Start Footer Area =================-->
<footer class="footer-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src=" {{ asset('img/instagram/i1.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i2.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i3.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i4.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i5.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i6.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i7.jpg') }} " alt=""></li>
                        <li><img src=" {{ asset('img/instagram/i8.jpg') }} " alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        </div>
    </div>
</footer>
<!--================ End Footer Area =================-->

<script src=" {{ asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
<script src=" {{ asset('vendors/bootstrap/bootstrap.bundle.min.js') }} "></script>
<script src=" {{ asset('vendors/owl-carousel/owl.carousel.min.js') }} "></script>
<script src=" {{ asset('js/jquery.ajaxchimp.min.js') }} "></script>
<script src=" {{ asset('js/mail-script.js') }} "></script>
<script src=" {{ asset('js/main.js') }} "></script>
</body>
</html>
