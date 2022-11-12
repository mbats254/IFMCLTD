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
<!--video bd-->
<div class="vid-bg">
        <div class="lyt">
            <a href="#pavida" class="vid-cancel">
                <i class="fas fa-times"></i>
            </a>
            <div class="lyt-txt">
            @foreach($home_vihs as $home_vih)
                <h class="title-vid">{{$home_vih->heading}}</h>
            @endforeach
            </div>

        </div>

        <div class="vid-sector">
            <div class="main-video">
            @foreach($home_vims as $home_vim)
                <div class="video1">
                    <video src="{{$home_vim->vid_link}}" height="100%" width="100%" controls muted autoplay loop></video> <br>
                    <h class="vid-name">{{$home_vim->vid_name}}</h>
                </div>
            @endforeach
            </div>
            <div class="v-list">
            @foreach($home_vims as $home_vim)
                <div class="vid-track fyeah currentF">
                    <video src="{{$home_vim->vid_link}}" height="100%" width="100%" muted></video>
                    <h class="vid-name">{{$home_vim->vid_name}}</h>
                </div>
            @endforeach
            @foreach($home_vis as $home_vi)  
                <div class="vid-track">
                    <video src="{{$home_vi->vid_link}}" height="100%" width="100%" muted></video>
                    <h class="vid-name">{{$home_vi->vid_name}}</h>
                </div>
            @endforeach

            </div>
        </div>
    </div>
<!--home wehere it happens section-->   
 <section class="p-14">

<!--home-section-->

<section class="home-form">
    <!--Intro home Sect-->
    <section class="waa">
        <div class="st owl-carousel owl-theme">
            <div class="ip">
             @foreach($intro1s as $intro1) 
                <div class="full-slider-box f-slide-1" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url({{$intro1->img}});">
                    <div class="wabebe">
                        <div class="f-slider-text">
                            <span class="opnin">{{$intro1->sm_head}}</span>
                            <strong>{{$intro1->bold_head}} <br>{{$intro1->bold_2_head}} <br>{{$intro1->bold_3_head}}<br> 
                                <font>{{$intro1->bold_diff_head}}</font>
                            </strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>

                    </div>
                </div>
             @endforeach
            </div>
            <div class="ip2">
              @foreach($intro2s as $intro2) 
                <div class="full-slider-box f-slide-2" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url({{$intro2->img}}); ">
                    <div class="slider-text-container">
                        <div class="f-slider-text">
                            <span>{{$intro2->sm_head}}</span>
                            <strong>{{$intro2->bold_head}} <br>{{$intro2->bold_2_head}} <font>{{$intro2->bold_diff_head}}</font></strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
            <div class="ip3">
             @foreach($intro3s as $intro3)
                <div class="full-slider-box f-slide-3" style=" background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url({{$intro3->img}}); ">
                    <div class="Kaiga">
                        <div class="f-slider-text">
                            <span>{{$intro3->sm_head}}</span>
                            <strong>{{$intro3->bold_head}}  <br>{{$intro3->bold_2_head}} <font>{{$intro3->bold_diff_head}}</font></strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>
            <div class="ip4">
             @foreach($intro4s as $intro4)
                <div class="full-slider-box f-slide-4" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url({{$intro4->img}});">
                    <div class="sufuri">
                        <div class="f-slider-text">
                            <span>{{$intro4->sm_head}}</span>
                            <strong>{{$intro4->bold_head}}  <br>{{$intro4->bold_2_head}} <font>{{$intro4->bold_diff_head}}</font></strong>

                        </div>
                        <div class="m-btn" id="s-mbtn">
                               <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                        </div>
                    </div>
                </div>
             @endforeach
            </div>


        </div>
    </section>
    <!--About home sect-->
    <section class="feature" id="feature">
        <div class="box">
            <div class="row">
                <div class="tittle">
                    <div class="aboutstart">
                    @foreach($home_abs as $home_ab)
                        <div class="divai"><img src="{{$home_ab->img}}" alt=""></div>
                        <div class="abouti">
                            <h2>{{$home_ab->headn}}</h2>
                            <div class="line5"></div> 
                        <p class="text">
                        {{$home_ab->para}}
                        </p>
                        <div class="right aniright">
                            <div class="serv-icon si1">
                                <a href="{{$home_ab->icon_1_href}}" class="isize AAbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="{{$home_ab->icon_1}}"></i></a>
                                <p class="serv-icon-name">{{$home_ab->icon_1_name}}</p>
                            </div>
                            <div class="serv-icon si2">
                                <a href="{{$home_ab->icon_2_hef}}" class="isize TSbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="{{$home_ab->icon_2}}"></i></a>
                                <p class="serv-icon-name">{{$home_ab->icon_2_name}}</p>
                            </div>
                            <div class="serv-icon si3">
                                <a href="{{$home_ab->icon_3_href}}" class="isize CAbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="{{$home_ab->icon_3}}"></i></a>
                                <p class="serv-icon-name">{{$home_ab->icon_3_name}}</p>
                            </div>
                            <div class="serv-icon si4">
                                <a href="{{$home_ab->icon_4_href}}" class="isize OSbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="{{$home_ab->icon_4}}"></i></a>
                                <p class="serv-icon-name">{{$home_ab->icon_4_name}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>

                </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!--features home sect-->
    <section class="more" id="more">
        <div class="box">
            <div class="row">
                <div class="item-content">
                @foreach($home_vms as $home_vm)
                    <span><i class="{{$home_vm->icon}}"></i></span>
                    <h2>{{$home_vm->heding}}</h2>
                    <div class="line2"></div>
                    <p class="text barbar">
                    <div class="walai">&#10004;</div> <p class="nviiri">{{$home_vm->para_1}}</p><br>
                    <div class="walai">&#10004;</div> <p class="nviiri">{{$home_vm->para_2}}</p> <br>
                    <div class="walai">&#10004;</div><p class="nviiri">{{$home_vm->para_3}}</p><br>
                    <div class="walai">&#10004;</div><p class="nviiri">{{$home_vm->para_4}}</p>

                    
                    </p>
                    @endforeach
                </div>
                <div class="item-content">
                @foreach($home_vm2s as $home_vm2)
                    <span><i class="{{$home_vm2->icon}}"></i></span>
                    <h2>{{$home_vm2->heding}}</h2>
                    <div class="line2"></div>
                    <p class="text ty">
                    {{$home_vm2->para_1}}
                    </p>
                    @endforeach
                </div>
                <div class="item-content">
                @foreach($home_vm3s as $home_vm3)
                    <span><i class="{{$home_vm3->icon}}"></i></span>
                    <h2>{{$home_vm3->heding}}</h2>
                    <div class="line2"></div>
                    <p class="text ty">
                        <p class="nviiri">{{$home_vm3->para_1}}</p><br>
                        <p class="nviiri">{{$home_vm3->para_2}}</p><br>
                        <p class="nviiri">{{$home_vm3->para_3}}</p>
                    </p>
                    @endforeach
                </div>

            </div>

        </div>

    </section>


    <!--pricing home sect-->
    <section class="price" id="price">
        <div class="box">
            <div class="tittle">
            @foreach($home_phs as $home_ph)
                <h2>{{$home_ph->heading}}</h2>
                <p class="text">{{$home_ph->sub_hd}}</p>
            @endforeach
            </div>
            <div class="row">
            @foreach($home_ps as $home_p)
                <div class="price-item {{$home_p->animate}}">
                    <h2>{{$home_p->heading}}</h2>
                    <ul>
                        <li><span class="oya">&#10004;</span><br>{{$home_p->sev_1}}</li>
                        <li><span class="oya">&#10004;</span><br>{{$home_p->sev_2}}</li>
                        <li><span class="oya">&#10004;</span><br>{{$home_p->sev_3}}</li>
                        <li><span class="oya">&#10004;</span><br>{{$home_p->sev_4}}</li>
                    </ul>
                    <div class="ptag">
                        <span>{{$home_p->price}}</span>
                        <span class="text">{{$home_p->duration}}</span>
                    </div>

                </div>
            @endforeach
            </div>
        </div>
    </section>

    <!--video home sect-->
    <section class="video" id="pavida">
    @foreach($home_vs as $home_v)
        <div class="box anileft">
            <a class="center z14"  style="text-decoration: none;">
                <i class="{{$home_v->icon}}"></i>
            </a>
            <h2>{{$home_v->heading}}</h2>
            <p>{{$home_v->phrase}}</p>
        </div>
    @endforeach
    </section>

    <!--Team home sect-->
    <section class="team" id="team">
        <div class="box">
            <div class="tittle">
            @foreach($home_ths as $home_th)
                <h2>{{$home_th->heading}}</h2>
                <p class="text">{{$home_th->sub_head}}</p>
             @endforeach
            </div>
            <div class="row owl-carousel owl-theme">
            @foreach($home_ts as $home_t)
                <div class="t-item">
                    <div class="t-img">
                        <img src="{{$home_t->img}}" alt="">
                        <div class="t-icon">
                            <a href="" class="center"  style="text-decoration: none;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="center"  style="text-decoration: none;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="center"  style="text-decoration: none;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="t-info">
                        <h3>{{$home_t->name}}</h3>
                        <span>{{$home_t->reputation}}</span>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
    <!--questions home sect-->
    <section class="qstn">
        <div class="box">
            <div class="tittle">
            @foreach($home_qs as $home_q)
                <h2>{{$home_q->heading}}</h2>
                <p class="text">{{$home_q->sub_head}}</p>
            @endforeach
            </div>
            <div class="row anibottom">
                <div class="qstn-item">
                @foreach($home_q1s as $home_q1)
                    <div class="qstn-head">
                        <h3>{{$home_q1->qust}}</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <p class="text">{{$home_q1->qust_inner_1}}
                            <a href="#" class="k">{{$home_q1->qust_inner_link}}</a>
                        </p>
                        <p class="text">{{$home_q1->qust_inner_2}}<br>
                        {{$home_q1->qust_inner_emoji}} </p>
                    </div>
                @endforeach
                </div>
                <div class="qstn-item">
                @foreach($home_q2s as $home_q2)
                    <div class="qstn-head">
                        <h3>{{$home_q2->qust}}</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <p class="text">{{$home_q2->qust_inner_1}}</p>
                        <p class="text">{{$home_q2->qust_inner_2}} <a
                                href="#" class="k">{{$home_q2->qust_inner_link}}</a><br> {{$home_q2->qust_inner_emoji}}</p>
                    </div>
                @endforeach
                </div>
                <div class="qstn-item">
                @foreach($home_q3s as $home_q3)
                    <div class="qstn-head">
                        <h3>{{$home_q3->qust}}</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <textarea class="rt" id="complain" name="complain" rows="4" cols="50"
                            placeholder="Message"></textarea><br>
                        <a href=""><button class="btn-3">Submit</button></a><br> {{$home_q3->qust_inner_emoji}}
                    </div>
                @endforeach
                </div>
                <div class="qstn-item">
                @foreach($home_q4s as $home_q4)
                    <div class="qstn-head">
                        <h3>{{$home_q4->qust}}</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <textarea class="rt" id="complain" name="complain" rows="4" cols="50"
                            placeholder="Message"></textarea><br>
                        <a href=""><button class="btn-3">Submit</button></a><br>{{$home_q4->qust_inner_emoji}}
                    </div>
                 @endforeach
                </div>
                <div class="qstn-item">
                @foreach($home_q5s as $home_q5)
                    <div class="qstn-head">
                        <h3>{{$home_q5->qust}}</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <textarea class="rt" id="complain" name="complain" rows="4" cols="50"
                            placeholder="Message"></textarea><br>
                        <a href=""><button class="btn-3">Submit</button></a><br>{{$home_q5->qust_inner_emoji}}
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--Response home sect-->
    <section class="response" id="response"style="background-image: linear-gradient(rgba(27,188,156,0.8), rgba(27,188,156,0.9)), url(/img/homeimg/inter.jpg);">
        <div class="box">
            <div class="tittle">
            @foreach($home_tesths as $home_testh)
                <h2>{{$home_testh->heading}}</h2>
                <p class="text">{{$home_testh->sub_head}}</p> <br>
                <i class="far fa-comment-alt fa-2x"></i>
             @endforeach
            </div>
            <div class="row owl-carousel owl-theme">
            @foreach($home_tests as $home_test)
                <div class="response-item">
                    <div class="response-img">
                        <img src="{{$home_test->img}}" alt="">
                    </div>
                    <span>{{$home_test->heading}}</span>
                    <p>
                    {{$home_test->sub_head}}
                    </p>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--contact home sect-->
    <section class="lol" id="contact">
        <div class="box">
            <div class="tittle">
            @foreach($home_chs as $home_ch)
                <h2>{{$home_ch->heading}}</h2>
                <p class="text">{{$home_ch->sub_head}}</p>
            @endforeach
            </div>
            <div class="row">
             @foreach($home_cs as $home_c)
                <div class="c-l anibottom">
                    <div class="mwathani"><iframe width="100%" height="100%" id="gmap_canvas"
                            src="{{$home_c->map}}"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://123movies-to.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 100%;
                                width: 100%;
                            }
                        </style><a href="https://www.embedgooglemap.net"></a>
                        <style>
                            .mwathani {
                                overflow: hidden;
                                background: none !important;
                                height: 100%;
                            }
                        </style>
                    </div>
                </div>
                <div class="c-r aniright">
                    <form action="#">
                        <h2>{{$home_c->heading}}</h2>
                        <span>{{$home_c->sub_head}}</span>
                        <input type="text" class="fin" placeholder="Name">
                        <input type="email" class="" placeholder="Example@gmail.com">
                        <input type="text" class="" placeholder="Subject">
                        <textarea placeholder="Your Message" rows="10" cols="30"></textarea>
                        <button type="submit" class="send-btn">Submit</button>
                    </form>
                    <div>
                        <h2>Also through:</h2><br>
                        <i class="far fa-envelope"></i>
                        <p>{{$home_c->email}}</p><br>
                        <i class="fas fa-phone-alt"></i>
                        <p>{{$home_c->contact}}</p>
                    </div>
                </div>
             @endforeach    
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
          /*--video background--*/
          $(document).on('click', '.z14', function () {
            $('.vid-bg').addClass('vid-active')
        });
        $(document).on('click', '.vid-cancel', function () {
            $('.vid-bg').removeClass('vid-active')
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
