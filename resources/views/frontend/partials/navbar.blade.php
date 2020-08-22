    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>{{ auth()->user() ? auth()->user()->user_name : '' }}</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('public/assets/img/language.png') }}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            @if(Auth::user())
                            <div class="header__top__right__auth">
                                <a href="{{ asset('dashboard')}}"><i class="fa fa-folder"></i>Dashboard</a>
                                <a href="{{ asset('logout')}}"><i class="fa fa-user"></i>Log Out</a>
                            </div>
                            @else
                            <div class="header__top__right__auth">
                                <a href="{{ asset('registration')}}"><i class="fa fa-user-plus"></i>Sign Up</a>
                                <a href="{{ asset('login')}}"><i class="fa fa-sign-in"></i>Sign In</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('public/assets/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{ asset('/home') }}">Home</a></li>
                            <li><a href="{{ asset('/productList') }}">Shop</a></li>
                            @if(auth::user())
                            <li><a href="#">Shop Details</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ asset('/shopingCart') }}">Shoping Cart</a></li>
                                    <li><a href="{{ asset('/checkout') }}">Check Out</a></li>
                                </ul>
                            </li>
                            @endif
                            <li><a href="{{ asset('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{ asset('/shopingCart') }}""><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>${{ isset($order) ? $order->total_amoun : 0}}</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->