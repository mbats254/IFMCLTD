<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IFMCLTD</title>

    <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- mycss -->
    <link rel="stylesheet" href="/css/97.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed " style="z-index:100; width:100%; top:0;">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                   <div><img src="/img/me.png" style="height: 45px;" class="pe-3"></div> <div style="height: 45px; border-right: 1px solid #333;" class="mt-2"></div>
                   <div class="ps-3 pt-1 h6"><div>Integrated Financial</div><div>Management</div><div>Consultants Limited</div></div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="/videos" class="nav-link">Videos</a></li>
                            <li class="nav-item"><a href="/news" class="nav-link">News</a></li>
                            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
            </div>
</nav>
 <!--loader-->
 <div class="loader_all" id="loader_all">
    <div class="l_any">
        
        <img src="/img/lder/l3.gif" alt="">
        
    </div>
</div>

@yield('content')
<footer>
    <div class="hfooter">
        <h3>Quick Links</h3>
        <li><a href="/" class="home Hf"><i class="fas fa-long-arrow-right"></i>Home</a></li>
        <li><a href="/about" class="about Af"><i class="fas fa-long-arrow-right"></i>About</a></li>
        <li><a href="/service" class="service Sf"><i class="fas fa-long-arrow-right"></i>Services</a></li>
        <li><a href="/videos" class="international If"><i class="fas fa-long-arrow-right"></i>Videos</a></li>
        <li><a href="/news" class="news Nf"><i class="fas fa-long-arrow-right"></i>News</a></li>
        <li><a href="/contact" class="contact Cf"><i class="fas fa-long-arrow-right"></i>Contact</a></li>
    </div>
    <div class="hfooter">
        <h3>Our Services</h3>
        <li><a href="/servicefinance" class="CAbtn"><i class="fas fa-long-arrow-right"></i>Finance Management</a></li>
        <li><a href="/serviceoperation" class="TSbtn"><i class="fas fa-long-arrow-right"></i>Operation Management</a></li>
        <li><a href="/servicestrategic" class="OSbtn"><i class="fas fa-long-arrow-right"></i>Strategic Management</a></li>
        <li><a href="/serviceinstitutionleakage" class=" AAbtn"><i class="fas fa-long-arrow-right"></i>Finance Literacy</a></li>
    </div>
    <div class="hfooter">
        <h3>Extras</h3>
        <li><a href="#"><i class="fas fa-long-arrow-right"></i>Privacy Policy</a></li>
        <li><a href="#"><i class="fas fa-long-arrow-right"></i>Help</a></li>
        <li><a href="#"><i class="fas fa-long-arrow-right"></i>Career</a></li>
        <li><a href="#"><i class="fas fa-long-arrow-right"></i>Terms & Conditions</a></li>
    </div>
    <div class="hfooter">
        <h3>Get in Touch</h3>
        <li>P.O. Box 1668, 00900<br><br>Nairobi,<br><br>Kenya</li>
        <li>Tel: +254768072844</li>
        <li>Email: info@ifmcltd.com</li>

    </div>
    <div class="hfooter">
        <h3>Newsletter</h3>
        <p>Get E-mail updates about our services and special offers, </p>
        <div class="subscribe">
            <input type="email" placeholder="Example@gmail.com" required>
            <a href="#" class="yellow">SUBSCRIBE</a>
        </div>
    </div>
    <div class="Payments">
        <h3>Secured Payment Gateways</h3>
        <div class="p-logo">
            <li><img src="/img/paylog/logo3.webp" alt="" width="60" height="60"></li>
            <li><img src="/img/paylog/logom.png" alt="" width="60" height="60"></li>
            <li><img src="/img/paylog/logok.webp" alt="" width="60" height="60"></li>
            <li><img src="/img/paylog/logo1.png" alt="" width="60" height="60"></li>
        </div>
    </div>
    <div class="copyrighticons">
        <p>Copyright © {!! date('Y') !!} All rights reserved | This template created by Mwaura Kennedy</p>
        <div class="f-links">
            <a href="#" class="center">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="center">
                <i class="fab fa-instagram "></i>
            </a>
            <a href="#" class="center">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="center">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="center">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</footer>
<script src="/js/jQuery.js"></script>
<script src="/js/triggerscript.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script type="text/javascript">
      /*-------bookform------*/
      $(document).on('click', '.bsbtn', function () {
        $('.bookform').addClass('bookfin-active')
    });
    $(document).on('click', '.b-out', function () {
        $('.bookform').removeClass('bookfin-active')
    });
    //chat
    $(document).on('click', '.online_chat', function () {
        $('.o-chatdisplay').addClass('comethou')
    });
    $(document).on('click', '.chat-cancel,.notification,.Search', function () {
        $('.o-chatdisplay').removeClass('comethou')
    });
      //reveal
      window.addEventListener('scroll', reveal);
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
        for (var t = 0; t < reveals.length; t++) {
            var windowheight = window.innerHeight;
            var revealtop = reveals[t].getBoundingClientRect().top;
            var revealpoint = 74;
            if (revealtop < windowheight - revealpoint) {
                reveals[t].classList.add('ona');
            }
            else {
                reveals[t].classList.remove('ona');
            }
        }
    }
    window.addEventListener('scroll', lef);
    function lef() {
        var lefts = document.querySelectorAll(".anileft");
        for (var l = 0; l < lefts.length; l++) {
            var windowheight = window.innerHeight;
            var revealtop = lefts[l].getBoundingClientRect().top;
            var revealpoint = 110;
            if (revealtop < windowheight - revealpoint) {
                lefts[l].classList.add('leta');
            }
            else {
                lefts[l].classList.remove('leta');
            }
        }
    }
    window.addEventListener('scroll', righ);
    function righ() {
        var rights = document.querySelectorAll(".aniright");
        for (var r = 0; r < rights.length; r++) {
            var windowheight = window.innerHeight;
            var revealtop = rights[r].getBoundingClientRect().top;
            var revealpoint = 140;
            if (revealtop < windowheight - revealpoint) {
                rights[r].classList.add('itisha');
            }
            else {
                rights[r].classList.remove('itisha');
            }
        }
    }
    window.addEventListener('scroll', botto);
    function botto() {
        var downs = document.querySelectorAll(".anibottom");
        for (var b = 0; b < downs.length; b++) {
            var windowheight = window.innerHeight;
            var revealtop = downs[b].getBoundingClientRect().top;
            var revealpoint = 74;
            if (revealtop < windowheight - revealpoint) {
                downs[b].classList.add('uptop');
            }
            else {
                downs[b].classList.remove('uptop');
            }
        }
    }
    window.addEventListener('scroll', uleft);
    function uleft() {
        var ulefts = document.querySelectorAll(".uanileft");
        for (var pl = 0; pl < ulefts.length; pl++) {
            var windowheight = window.innerHeight;
            var revealtop = ulefts[pl].getBoundingClientRect().top;
            var revealpoint = 50;
            if (revealtop < windowheight - revealpoint) {
                ulefts[pl].classList.add('gleft');
            }
            else {
                ulefts[pl].classList.remove('gleft');
            }
        }
    }
    window.addEventListener('scroll', uright);
    function uright() {
        var urights = document.querySelectorAll(".uaniright");
        for (var pr = 0; pr < urights.length; pr++) {
            var windowheight = window.innerHeight;
            var revealtop = urights[pr].getBoundingClientRect().top;
            var revealpoint = 50;
            if (revealtop < windowheight - revealpoint) {
                urights[pr].classList.add('gright');
            }
            else {
                urights[pr].classList.remove('gright');
            }
        }
    }
    window.addEventListener('scroll', ileft);
    function ileft() {
        var ilefts = document.querySelectorAll(".kuanileft");
        for (var pp = 0; pp < ilefts.length; pp++) {
            var windowheight = window.innerHeight;
            var revealtop = ilefts[pp].getBoundingClientRect().top;
            var revealpoint = 50;
            if (revealtop < windowheight - revealpoint) {
                ilefts[pp].classList.add('lleft');
            }
            else {
                ilefts[pp].classList.remove('lleft');
            }
        }
    }
</script>
</body>
</html>
