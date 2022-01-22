<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ranna | {{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')  }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')  }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')  }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')  }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css')  }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    <style>
        img.logo{
            height: 6.5em;
        }
        span.notification {
            position: absolute;
            border-radius: 50%;
            font-size: 1rem;
            top: -1em;
            right: 0em;
        }
    </style>
    {{ $styles }}
</head>

<body>

    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        <header class="header-one">
            <div id="header-main-menu" class="header-main-menu header-sticky">
                <div class="container">                    
                    <div class="row">
                        <div class="col-lg-8 col-md-3 col-sm-4 col-4 possition-static">
                            <div class="site-logo-mobile">
                                <a href="{{ route('home') }}" class="sticky-logo-light"><img src="{{ asset('assets/images/logo.png') }}" alt="Site Logo" class="logo"></a>
                            </div>
                            <nav class="site-nav">
                                <ul id="site-menu" class="site-menu">
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Tags</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="recipe-with-sidebar.html">Recipes With Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="recipe-without-sidebar.html">Recipes Without Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-recipe1.html">Single Recipe 1</a>
                                            </li>
                                            <li>
                                                <a href="single-recipe2.html">Single Recipe 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-4 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                            <div class="nav-action-elements-layout1">
                                <ul>
                                    <li>
                                        <div class="cart-wrap cart-on-mobile d-lg-none">                                            
                                            <div class="cart-info">
                                                <i class="flaticon-shopping-bag"></i>
                                                <div class="cart-amount"><span class="item-currency">$</span>00</div>     
                                            </div>                                   
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/product/top-product1.jpg') }}" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Pressure</a>
                                                        <span>Code: STPT601</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$249</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/product/top-product2.jpg') }}" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Stethoscope</a>
                                                        <span>Code: STPT602</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$189</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/product/top-product3.jpg') }}" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Microscope</a>
                                                        <span>Code: STPT603</span>
                                                    </div>
                                                    <div class="cart-quantity">X 2</div>
                                                    <div class="cart-price">$379</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-btn">
                                                        <a href="#" class="item-btn">View Cart</a>
                                                        <a href="#" class="item-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="flaticon-profile"></i>Login
                                        </button>
                                    </li>
                                    <li>
                                        <a href="submit-recipe.html" class="fill-btn"><i class="flaticon-plus-1"></i>SUBMIT
                                            RECIPE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mob-menu-open toggle-menu">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="nav-action-elements-layout2">
                                <ul class="nav-social">
                                    <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#" title="skype"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#" title="rss"><i class="fas fa-rss"></i></a></li>
                                    <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="site-logo-desktop">
                                <a href="{{ route('home') }}" class="main-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Site Logo" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="nav-action-elements-layout3">
                                <ul>
                                    <li>
                                        <div class="header-search-box">
                                            <a href="#search" title="Search" class="search-button">
                                                <i class="flaticon-search"></i>
                                            </a> 
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-wrap d-none d-lg-block">                                            
                                            <div class="cart-info position-relative">
                                                {{-- <i class="flaticon-shopping-bag"></i> --}}
                                                <i class="far fa-bell"></i>
                                                <span class="badge badge-danger notification">3</span>
                                            </div>                                   
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/product/top-product1.jpg') }}" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Pressure</a>
                                                        <span>Code: STPT601</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$249</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/product/top-product2.jpg') }}" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Stethoscope</a>
                                                        <span>Code: STPT602</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$189</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/product/top-product3.jpg') }}" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Microscope</a>
                                                        <span>Code: STPT603</span>
                                                    </div>
                                                    <div class="cart-quantity">X 2</div>
                                                    <div class="cart-price">$379</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-btn">
                                                        <a href="#" class="item-btn">View Cart</a>
                                                        <a href="#" class="item-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- content begins --}}
        {{ $slot }}
        {{-- content ends--}}


        <!-- Footer Area Start Here -->
        <footer class="ranna-bg-dark">
            <div class="container">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo" alt="footer-logo"></a>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">FACEBOOK</a></li>
                        <li><a href="#">TWITTER</a></li>
                        <li><a href="#">INSTAGRAM</a></li>
                        <li><a href="#">PINTEREST</a></li>
                        <li><a href="#">GOOGLEPLUS</a></li>
                        <li><a href="#">YOUTUBE</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Search Box Start Here -->
    <div id="search" class="search-wrap">
        <button type="button" class="close">×</button>
        <form class="search-form">
            <input type="search" id="ooooo" value="" placeholder="Type here........" />
            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
        </form>
    </div>
    <!-- Search Box End Here -->
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Login</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="login-form">
                        <input class="main-input-box" type="text" placeholder="User Name" />
                        <input class="main-input-box" type="password" placeholder="Password" />
                        <div class="inline-box mb-5 mt-4">
                            <div class="checkbox checkbox-primary">
                                <input id="modal-checkbox" type="checkbox">
                                <label for="modal-checkbox">Remember Me</label>
                            </div>
                            <label class="lost-password"><a href="#">Lost your password?</a></label>
                        </div>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" type="submit" value="Login">Login</button>
                            <a href="#" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                        </div>
                    </form>
                    <label>Login connect with your Social Network</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->

    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    
    <!-- Smoothscroll Js -->
    <script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{ $scripts }}
</body>


</html>