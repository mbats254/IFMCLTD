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
    <div class="online_chat">
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
    </div>
<!--home wehere it happens section-->   
 <section class="p-14">

      <!--news section-->

      <section class="news-form">
            <section class="introd">
                <p class="hd-change">/ News</p>
            </section>

            <section class="blog page1-active">
                <section class="page1">
                
                        
                  
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="/img/newsimg/1.gif" alt="">
                        </div>
                        <div class="blog-details">
                            <h4>END OF THE YEAR AUDIT</h4>
                            <p>We made it..</p>
                            <a href="#" class="kiburn" onclick="Wakadinali()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <H1>2022-01-23</H1>
                    </div>

                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="/img/newsimg/2.jpg" alt="">
                        </div>
                        <div class="blog-details">
                            <h4>THE TAKE OFF</h4>
                            <p>We celebrate how far our company has grown from our humble backgrounds to</p>
                            <a href="#" class="kiburn" onclick="Nyashinski()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <H1>2022-01-21</H1>
                    </div>

                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="/img/newsimg/partewesay.jpg" alt="">
                        </div>
                        <div class="blog-details">
                            <h4>BOOMING PERIOD</h4>
                            <p>We celebrate how far our company has grown from our humble backgrounds to </p>
                            <a href="#" class="kiburn" onclick="BuruklynBoyz()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <H1>2022-01-14</H1>
                    </div>

                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="/img/newsimg/kk3.gif" alt="">
                        </div>
                        <div class="blog-details">
                            <h4>TESTING PERIOD</h4>
                            <p>We celebrate how far our company has grown from our humble backgrounds to</p>
                            <a href="#" class="kiburn" onclick="Bien()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <H1>2022-01-12</H1>
                    </div>

                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="/img/newsimg/dt.jfif" alt="">
                        </div>
                        <div class="blog-details">
                            <h4>START OF THE YEAR AUDIT</h4>
                            <p>We celebrate how far our company has grown from our humble backgrounds to </p>
                            <a href="#" class="kiburn" onclick="BenSoul()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <H1>2022-01-05</H1>
                    </div>
              
                </section>
            </section>
            <section class="page-numbers weeknd-active">
                <ul class="weeknd">
                    <li class=""><a href="/news" class="pg1 pantha paranoid">Jan</a></li>
                    <li class=""><a href="/news_feb_2022" class="pg2 pantha">Feb</a></li>
                    <li class=""><a href="/news_mar_2022" class="pg3 pantha">Mar</a></li>
                    <li class=""><a href="/news_apr_2022" class="pg4 pantha">Apr</a></li>
                    <li class=""><a href="#" class="pg5 pantha">May</a></li>
                    <li class=""><a href="#" class="pg6 pantha">Jun</a></li>
                    <li class=""><a href="#" class="pg7 pantha">Jul</a></li>
                    <li class=""><a href="#" class="pg8 pantha">Aug</a></li>
                    <li class=""><a href="#" class="pg9 pantha">Sep</a></li>
                    <li class=""><a href="#" class="pg10 pantha">Oct</a></li>
                    <li class=""><a href="#" class="pg11 pantha">Nov</a></li>
                    <li class=""><a href="#" class="pg12 pantha">Dec</a></li>
                </ul>
            </section>
            <section class="year-change yr-pg1-active">
                <div class="yr-pg1">
                    <li><a href="#" class="god6 paranoid y22">2022</a></li>
                    <li><a href="#" class="god6 y21">2021</a></li>
                    <li><a href="#" class="god6 y20">2020</a></li>
                    <li><a href="#" class="god6 y19">2019</a></li>
                    <li><a href="#" class="god6 y18">2018</a></li>
                    <div class="old-nxt old-1"><a href="#">older <i class="fas fa-long-arrow-right"></i></a></div>
                </div>
            </section>
            <section class="cKaiga smoke_good">
                <div class="main-kaiga">
                    <div class="back-page"><a href="#"><i class="fas fa-long-arrow-left"></i> BACK</a></div>
                    
                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-23</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/1.gif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>END OF THE YEAR AUDIT</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-21</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/2.jpg" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>THE TAKE OFF</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-14</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/partewesay.jpg" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>BOOMING PERIOD</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-12</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/kk3.gif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>TESTING PERIOD</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-05</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/dt.jfif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>START OF THE YEAR AUDIT</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>
                  
                    <div class="change-kaiga">
                        <div class="tengana">
                            <div class="tengana-left"><a href="#tengana" onclick="bringPrev()"><i
                                        class="fas fa-long-arrow-left"></i> PREVIOUS</a></div>
                            <div class="tengana-right"><a href="#tengana" onclick="bringNext()">NEXT <i
                                        class="fas fa-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="related-kaiga">
                        <div class="related-kaiga-heading">Related Posts</div>
                        <div class="related-kaiga-body">
                        <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/2.jpg" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>14th February 2021</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/kk.gif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>23rd February 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/1.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>12th March 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/dt.jfif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>21st February 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/kk4.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>14th February 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/t.gif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>5th July 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/kk3.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>21st July 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/2.jpg" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>23rd February 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/kk5.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>5th June 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/kk7.gif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>5th March 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-kaiga">
                    <div class="recent-kaiga">
                        <div class="recent-kaiga-heading">Recent Posts</div>
                        <div class="recent-kaiga-details">
                            <p><a href="#" onclick="WillyPaul()">12-04-2022: 25 YEARS OF GREATNESS</a></p>
                            <p><a href="#" onclick="Ssaru()">23-03-2022: END OF MARCH TAX SUMMARY</a></p>
                            <p><a href="#" onclick="Jovial()">14-03-2022: TAXATION FOR CRYPTOCURRENCY</a></p>
                            <p><a href="#" onclick="Naiboi()">5-03-2022: KENYA BUDGET SPEECH </a></p>
                            <p><a href="#" onclick="OtileBrown()">23-02-2022: NEW BEGINING OF THE WINTER</a></p>
                        </div>
                        <div class="recent-kaiga-details">
                            <p><a href="#" onclick="Avril()">21-11-2022: 25 YEARS OF GREATNESS</a></p>
                            <p><a href="#" onclick="Nviirithestoryteller()">12-06-2022: END OF MARCH TAX SUMMARY</a></p>
                            <p><a href="#" onclick="SirJames()">14-09-2022: TAXATION FOR CRYPTOCURRENCY</a></p>
                            <p><a href="#" onclick="CampMulla()">5-11-2022: KENYA BUDGET SPEECH </a></p>
                            <p><a href="#" onclick="Wangeshi()">23-05-2022: NEW BEGINING OF THE WINTER</a></p>
                        </div>
                    </div>
                    <div class="rcomments-kaiga">
                        <div class="rcomments-kaiga-heading">Recent Comments</div>
                        <div class="rcomments-kaiga-details">
                            <p>"What is our current V.A.T"</p>
                            <p>"Any Cargo Tax updates"</p>
                            <p>"Can you help me to plan for my business tax and profits margin"</p>
                            <p>"Wow finally a plus for more oxygen for us"</p>
                            <p>"Nice party &#129395; didn't know C.E.O got smooth moves"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"Siakwata siakwata nduru za mukamba"</p>
                            <p>"Too fire"</p>
                            <p>"We too savage"</p>
                            <p>"This shit way too easy"</p>
                            <p>"Wawawawawawawawa"</p>
                            <p>"Wacha tu"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"Suwelo siii"</p>
                            <p>"arakarakarata"</p>
                            <p>"numelo suwelo"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"aah basi mpenzi mtazamaji"</p>
                            <p>"moja kwa moja hadi bankok"</p>
                            <p>"hapa seth lorence anakuandalia"</p>
                            <p>"kipindi cha lala salama"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"Hapa cynthia rutherock ni moto wa pazi"</p>
                            <p>"Aiii nikiii guku kuranuga mitugo"</p>
                            <p>"mimi wako aka kimoda dj afro"</p>
                        </div>
                    </div>
                    <div class="archive-kaiga">
                        <div class="archive-kaiga-heading">Archive</div>
                        <div class="archive-kaiga-details">
                            <p><a href="#"  onclick="Jegede()">April 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#"  onclick="Ssaru()">March 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#"  onclick="OtileBrown()">February 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#"  onclick="Wakadinali()">January 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">December 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">November 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">October 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">September 20221 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">August 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">July 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">June 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">May 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">April 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">March 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">February 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">January 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">December 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">November 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">October 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">September 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="categories-kaiga">
                        <div class="categories-kaiga-heading">Categories</div>
                        <div class="categories-kaiga-details">
                            <p><a href="#">Budget <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">General News <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Tax News <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Uncategorised <i class="fas fa-long-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="meta-kaiga">
                        <div class="meta-kaiga-heading">Meta</div>
                        <div class="meta-kaiga-details">
                            <p><a href="#">Log in <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Entries feed <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Comments feed <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">WordPress.org <i class="fas fa-long-arrow-right"></i></a></p>
                        </div>
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

          /*--continue reading button--*/
        $(document).on('click', '.kiburn', function () {
            $('.blog').removeClass('page1-active').addClass('kkyt')
        });
        $(document).on('click', '.kiburn', function () {
            $('.page-numbers').removeClass('weeknd-active').addClass('kkyt')
        });
        $(document).on('click', '.kiburn', function () {
            $('.year-change').removeClass('yr-pg1-active').addClass('kkyt')
        });
        $(document).on('click', '.kiburn', function () {
            $('.hd-change').addClass('ongeza-head')
        });
        $(document).on('click', '.kiburn', function () {
            $('.cKaiga').removeClass('smoke_good')
        });
        //back
        $(document).on('click', '.back-page', function () {
            $('.blog').addClass('page1-active').removeClass('kkyt')
        });
        $(document).on('click', '.back-page', function () {
            $('.page-numbers').addClass('weeknd-active').removeClass('kkyt')
        });
        $(document).on('click', '.back-page', function () {
            $('.year-change').addClass('yr-pg1-active').removeClass('kkyt')
        });
        $(document).on('click', '.back-page', function () {
            $('.hd-change').removeClass('ongeza-head')
        });
        $(document).on('click', '.back-page', function () {
            $('.cKaiga').addClass('smoke_good')
        });
                //next & Previous
                var ondisplayDiv = 0;
        function showPage() {
            $(".subject-kaiga").hide();
            $(".subject-kaiga:eq(" + ondisplayDiv + ")").show();
        }
        showPage()
        var dateDisplay = 0;
        function datePage() {
            $(".recent-kaiga-details").hide();
            $(".recent-kaiga-details:eq(" + dateDisplay + ")").show();
        }
        datePage()
        var commentsDisplay = 0;
        function commentPage() {
            $(".rcomments-kaiga-details").hide();
            $(".rcomments-kaiga-details:eq(" + commentsDisplay + ")").show();
        }
        commentPage()
        var relatedDisplay = 0;
        function relatedPage() {
            $(".related-kaiga-body").hide();
            $(".related-kaiga-body:eq(" + relatedDisplay + ")").show();
        }
        relatedPage()
        
        function bringNext() {
            if (ondisplayDiv == $(".subject-kaiga").length - 1) {
                ondisplayDiv = 0;
            }
            else {
                ondisplayDiv++;
            }
            showPage();
            if (dateDisplay == $(".recent-kaiga-details").length - 1) {
                dateDisplay = 0;
            }
            else {
                dateDisplay++;
            }
            datePage();
            if (commentsDisplay == $(".rcomments-kaiga-details").length - 1) {
                commentsDisplay = 0;
            }
            else {
                commentsDisplay++;
            }
            commentPage();
            if (relatedDisplay == $(".related-kaiga-body").length - 1) {
                relatedDisplay = 0;
            }
            else {
                relatedDisplay++;
            }
            relatedPage();
        }
        function bringPrev() {
            if (ondisplayDiv == 0) {
                ondisplayDiv = $(".subject-kaiga").length - 1;
            }
            else {
                ondisplayDiv--;
            }
            showPage();
            if (dateDisplay == 0) {
                dateDisplay = $(".recent-kaiga-details").length - 1;
            }
            else {
                dateDisplay--;
            }
            datePage();
            if (commentsDisplay == 0) {
                commentsDisplay = $(".rcomments-kaiga-details").length - 1;
            }
            else {
                commentsDisplay--;
            }
            commentPage();
            if (relatedDisplay == 0) {
                relatedDisplay = $(".related-kaiga-body").length - 1;
            }
            else {
                relatedDisplay--;
            }
            relatedPage();
        }
        function Wakadinali(){
            ondisplayDiv = 0;
            showPage();
            dateDisplay = 0;
            datePage();
            commentsDisplay = 0;
            commentPage();
            relatedDisplay = 0;
            relatedPage();
        }
        function Nyashinski(){
            ondisplayDiv = 1;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 1;
            commentPage();
            relatedDisplay = 1;
            relatedPage();
        }
        function BuruklynBoyz(){
            ondisplayDiv = 2;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 2;
            commentPage();
            relatedDisplay = 2;
            relatedPage();
        }
        function Bien(){
            ondisplayDiv = 3;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 3;
            commentPage();
            relatedDisplay = 3;
            relatedPage();
        }
        function BenSoul(){
            ondisplayDiv = 4;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 4;
            commentPage();
            relatedDisplay = 4;
            relatedPage();
        }
    </script>
    </body>
</html>