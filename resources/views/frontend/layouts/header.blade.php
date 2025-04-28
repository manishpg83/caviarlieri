<div class="header">
    <nav class="navbar navbar-expand-xl fixed-top nav-bg">
        <div class="container-fluid px-0">
            <div style="height: 65px">
                <a class="navbar-toggler menu-btn mt-3" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <img alt="" id="menu" class="d-block" src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/menu.png" width="25">
                    <img alt="" id="close" class="d-none" src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/close.png" width="25">
                </a>
            </div>
            <!--main logo & cart below 768-->
            <div class="d-xl-none d-block main-logo"><a href="home.php"><img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/logo_main.png" alt=""></a></div>
            <div class="d-xl-none d-block"><a href="https://store.swisscaviarlieri.com/" class="cart-icon"><img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/cart-icon.png" alt=""></a></div>
            <!--main logo & cart below 768-->
            <div class="collapse navbar-collapse px-3 px-xl-0 " id="navbarText">
                <ul class="navbar-nav mb-2 mb-xl-0 px-4 text-uppercase">
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('swisscellulartherapy') }}">SWISS CELL THERAPY</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('outstandingbenefits') }}">BENEFITS</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('clinicalscience') }}">Scientific Studies</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('expertsopinions') }}">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('keyingredients') }}">Key Ingredients</a></li>
                </ul>
                <!--main logo above 768-->
                <div class="col-lg-1 d-none d-xl-block main-logo" align="center"><a href="{{ route('home') }}"><img src="https://cdn2-bread6hkcwg3dyar.z01.azurefd.net/assets/images/logo_main.png" width="160" alt=""></a></div>
                <!--main logo above 768-->
                <ul class="navbar-nav mb-2 mb-xl-0 px-4 text-uppercase">
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('luxuryofcaviar') }}">Luxury of Caviar</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('swisscaviarlieribeauty') }}">Swiss Caviarlieri Beauty</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{ route('contact') }}">CONTACT US</a></li>
                    <li class="nav-item"><a href="{{ route('cart') }}" class="gold-btn d-none d-xl-block"><span class="btn-content-wrapper"><span class="btn-content-text navbar-gold-btn">ORDER NOW</span></span></a></li>

                    <!-- User Dropdown -->
                    <li class="nav-item dropdown ms-xl-3">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            @auth
                                <li><a class="dropdown-item" href="{{ route('myaccount') }}">My Account</a></li>
                                <li><a class="dropdown-item" href="{{ route('orders') }}">My Orders</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            @endauth
                        </ul>
                    </li>
                    <!-- End User Dropdown -->
                </ul>
            </div>
        </div>
    </nav>
</div>
