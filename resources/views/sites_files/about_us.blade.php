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
    <!--chat-->
    {{-- <div class="online_chat">
        <a href="#mtexto" id="mchato"><i class="fas fa-comment-alt"></i></a>
    </div>
    <div class="o-chatdisplay">
        <div class="hd-chat" id="mtexto">
            <a href="#mchato" class="chat-cancel">
                <i class="fas fa-times"></i>
            </a>
            <h1>ONLINE CHAT</h1>
        </div>
        <div class="m-chat">

        </div>
    </div> --}}
<!--home wehere it happens section-->   
 <section class="p-14">

    <!--about section-->

    <section class="about-form">
            <section class="introd">
                <p>/ About</p>
            </section>
            <section class="company-history">
                <div class="note">
                    <div class="hapatu">
                        <h3>ABOUT US</h3>
                        <div class="l78"></div>
                        <p>
                        IFMC is a business advisory services a management consulting company registered in Kenya. We offer financial management Services that are integrated with other advisory services in operations and strategy management with a focus to business / Institution growth and we are sensitive to costs that are affordable. IFMC offers advisory services that serve as a one stop shop which gives the clients 4 pillars services of business / Institution needs. We have experiences from the countries in the east Africa Region where we have trained finance, logistics, HR and administration, Farmers, Women and Youth groups.
                        </p>
                    </div>
                    <div class="abt-img"><img src="/img/aboutimg/audit.jpg" alt="" height="400"></div>
                </div>
            </section>

            <section class="team-qualify">
            
                <h1 class="gang_head">OUR STAFF MEMBERS</h1>
                <p class="gang_sub">@2020</p>

            
                <div class="ceo inboxx reveal">
                    <div class="ceo_img"><img src="/img/aboutimg/teamimg/ceo.jpg" alt=""></div>
                    <div class="ceo_details">
                        <h1>LEAH MBURU</h1>
                        <h2>Managing Director / Lead Consultant</h2>
                        <p>
                        She is a Business and Financial Management expert, a holder of an MBA (Finance Option), BCOM (Accounting Option) and a professional ACCA Affiliate. She is currently Pursuing PHD: Public policy programme in the University of Nairobi. Attained a vast working experience of over 25 years in financial management, Accounting, Auditing and taxation, Administration, Operations and logistics management, Strategy and corporate governance, Capacity building and HR management among many more business operational structures.She has been an International financial management expert in business advisory services to help small and medium businesses in strengthening their operations and financial management. She has worked in various sectors among them Manufacturing, Trade business in wholesale and retail, Hospitality, property management, Agriculture and financial sectors. She has been a part time lecturer in KCA University teaching Accounting and finance subjects. She has founded an initiative involved in mentorship and motivation of the youth in career building which include students’ academic excellence.
                        </p>
                    </div>
                </div>

                <div class="ceo inboxx reveal">
                    <div class="ceo_img"><img src="/img/aboutimg/teamimg/finance.jpg" alt=""></div>
                    <div class="ceo_details">
                        <h1>ROSEANNE MBAYA</h1>
                        <h2>Training and capacity building</h2>
                        <p>
                        Roseanne has distinguished herself as an experienced and knowledgeable professional in Organization Development and Leadership, Policy Formulation and Systems Creation, Grant Proposal Writing and Capacity Building, Project Management and Community Development. She has assisted many institutions in formulating institutional policies and developed strategic development plans, board manuals and training curriculums. She has graced the boardrooms of various institutions as a member to the Board of Directors including SLEC International, Rotary Club, MCK Rural/Urban Division, Bio-Intensive Rural Training Center and Marimanti Rural Training Center. She holds a degree in Business Management and an MBA – Strategy from Methodist University. Way too Messi
                        </p>
                    </div>
                </div>

                <div class="ceo inboxx reveal">
                    <div class="ceo_img"><img src="/img/aboutimg/teamimg/c.hfif" alt=""></div>
                    <div class="ceo_details">
                        <h1>ALICE KAMUYU</h1>
                        <h2>Administrative and Finance</h2>
                        <p>
                        Is an administrative and finance professional with an MBA (General Option) and a Bachelor of Commerce (BCOM). Alice has over the years gained a wealth of experience in accounting, financial management and reporting, audit, administration, operations, human resources management, customer service and quality control and therefore well rounded in all these areas. She has extensive work experience with contracts and grants management including compliance with donor rules and regulations.Alice has over 20 years of experience which includes international exposure in the United States. She has worked in many sectors which includes but not limited to service, technology, financial, manufacturing and healthcare sectors. Alice was instrumental in introducing Equity Bank Kenya to Kenyans in the US Diaspora. Alice is conversant with micro-finance and co-operative structures being a founder member of a Savings and Credit Co-operative Society (founded by former college mates) and a Self-help group for Women practicing table banking. Alice volunteers in a youth mentorship program to advise on careers and life skills, and personally coaches reading and math skills to a few young people at her free time.
                        </p>
                    </div>
                </div>

                <div class="ceo inboxx reveal">
                    <div class="ceo_img"><img src="/img/aboutimg/teamimg/hrr.jpg" alt=""></div>
                    <div class="ceo_details">
                        <h1>JOYNESS KAZIMOTO</h1>
                        <h2>Tanzanian Auditor</h2>
                        <p>
                        In charge of our Tanzanian clients. She is an Auditor who is well conversant with the clients needs and value adding auditing services. She has an experience of more than 10 years in different departments that include Accounting and Auditing, Administration and Customer care. She has previously worked in different industry sectors like Logistics and FMCG, Mobile service providers, Auditing and Banking. She is a holder of certificate of Masters in Accounts and Finance, Mzumbe University Dar-es-salaam Tanzania and certificate of Bachelors in Business Administration majoring in Accounts and Finance. She is a holder of Associate Certified Public Accountant (Tanzania). She is also a members of National Board of Accountants and Auditors (NBAA). In her personal development, she has attended many trainings that include Certificate in proposal writing, Grant management & professional writing training workshop.
                        </p>
                    </div>
                </div>

                <div class="ceo inboxx reveal">
                    <div class="ceo_img"><img src="/img/aboutimg/teamimg/op.jpg" alt=""></div>
                    <div class="ceo_details">
                        <h1>ROGERS KASAWULI</h1>
                        <h2>In charge of our Rwanda and Uganda operations</h2>
                        <p>
                        is our Representative in charge of our Rwanda and Uganda operations. He has over 13 years working experience and 9 of which at senior management level with very remarkable experience in leadership and developing successful finance teams. He is skilled in numerous fields, including budget preparation and implementation, financial management, credit management, inventory management and costing .He has worked as a Finance Manager in several companies in Uganda, Tanzania and Rwanda. He holds a BCOM from Makerere University Kampala and currently pursuing ACCA certification.
                        </p>
                    </div>
                </div>
            
                
            </section>
          
        </section>
</section>
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
            <p>Copyright © 2022 All rights reserved | This template created by Mwaura Kennedy</p>
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