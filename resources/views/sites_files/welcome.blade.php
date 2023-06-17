{{-- @extend('') --}}
@extends('sites_files.footers')
@section('content')

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
                <h3 class="title-vid">&#127909; Recorded Activies &#127911;</h3>
            </div>

        </div>

        <div class="vid-sector">
            <div class="main-video">
                <div class="video1">
                    <video src="/video/1.mp4" height="100%" width="100%" controls muted autoplay loop></video> <br>
                    <h3 class="vid-name">IFMCLTD Animation 1 &#127867;</h3>
                </div>
            </div>
            <div class="v-list">
                <div class="vid-track fyeah currentF">
                    <video src="/video/1.mp4" height="100%" width="100%" muted></video>
                    <h3 class="vid-name">IFMCLTD Animation 1 &#127867;</h3>
                </div>
                <div class="vid-track">
                    <video src="/video/2.mp4" height="100%" width="100%" muted></video>
                    <h3 class="vid-name">IFMCLTD Animation 2 &#128522;</h3>
                </div>
                <div class="vid-track">
                    <video src="/video/3.mp4" height="100%" width="100%" muted></video>
                    <h3 class="vid-name">IFMCLTD Animation 3 &#127949;</h3>
                </div>
                <div class="vid-track">
                    <video src="/video/4.mp4" height="100%" width="100%" muted></video>
                    <h3 class="vid-name">IFMCLTD Animation 4 &#128120;</h3>
                </div>

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

                <div class="full-slider-box f-slide-1" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url(/img/homeimg/customers.jpg);">
                    <div class="wabebe">
                        <div class="f-slider-text">
                            <span class="opnin">Welcome To</span>
                            <strong>Integrated Financial <br>Management <br>Consultants Limited<br> 
                                <font>IFMC</font>
                            </strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>

                    </div>
                </div>
             
            </div>
            <div class="ip2">
                <div class="full-slider-box f-slide-2" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url(/img/homeimg/40.jpg); ">
                    <div class="slider-text-container">
                        <div class="f-slider-text">
                            <span>We entrust our customers with</span>
                            <strong>Efficiency <br>Trustworthy <font>Honesty</font></strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ip3">
                <div class="full-slider-box f-slide-3" style=" background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url(/img/homeimg/aa.jpg); ">
                    <div class="Kaiga">
                        <div class="f-slider-text">
                            <span>We Are Located</span>
                            <strong>at  <br>Kiambu <font>Riverside Estate</font></strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ip4">
                <div class="full-slider-box f-slide-4" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url(/img/homeimg/c.jfif);">
                    <div class="sufuri">
                        <div class="f-slider-text">
                            <span>You can reach us through</span>
                            <strong>Our  <br>Office line <font>	0768072844</font></strong>

                        </div>
                        <div class="m-btn" id="s-mbtn">
                               <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--About home sect-->
    <section class="feature" id="feature">
        <div class="box">
            <div class="row">
                <div class="tittle">
                    <div class="aboutstart">
                    
                        <div class="divai"><img src="/img/homeimg/nowhere2.jpeg" alt=""></div>
                        <div class="abouti">
                            <h2>About Us</h2>
                            <div class="line5"></div> 
                        <p class="text">
                        IFMC is a business advisory services a management consulting company registered in Kenya. We offer financial management Services that are integrated with other advisory services in operations and strategy management with a focus to business/Institution growth and we are sensitive to costs that are affordable. IFMC Firm major on these fields as follows:
                        </p>
                        <div class="right aniright">
                            <div class="serv-icon si1">
                                <a href="/servicefinance" class="isize AAbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="fas fa-balance-scale"></i></a>
                                <p class="serv-icon-name">Finance Management</p>
                            </div>
                            <div class="serv-icon si2">
                                <a href="/serviceoperation" class="isize TSbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="fas fa-calculator"></i></a>
                                <p class="serv-icon-name">Operation Management</p>
                            </div>
                            <div class="serv-icon si3">
                                <a href="/servicestrategic" class="isize CAbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="fas fa-cloud"></i></a>
                                <p class="serv-icon-name">Strategic Management</p>
                            </div>
                            <div class="serv-icon si4">
                                <a href="/serviceinstitutionleakage" class="isize OSbtn ps-4 pe-4 pb-2"style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class="fas fa-clone"></i></a>
                                <p class="serv-icon-name">Finance Literacy Management</p>
                            </div>
                        </div>
                       
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
                    <span><i class="fa fa-edit"></i></span>
                    <h2>Our Goal</h2>
                    <div class="line2"></div>
                    <p class="text barbar">
                    <div class="walai">&#10004;</div> <p class="nviiri">Uphold Professionalism , ethics and high integrity</p><br>
                    <div class="walai">&#10004;</div> <p class="nviiri">Efficient delivery of our services</p> <br>
                    <div class="walai">&#10004;</div><p class="nviiri">Listen to customers and design services that suit them</p><br>
                    <div class="walai">&#10004;</div><p class="nviiri">Work with our clients to grow their businesses /Institutions to the next level</p>
                    
                    </p>

                </div>
                <div class="item-content">
                    <span><i class="fas fa-eye"></i></span>
                    <h2>Our Vision</h2>
                    <div class="line2"></div>
                    <p class="text ty">
                    To be the leading Company offering hybrid business management advisory services globally with affordable costs.
                    </p>
        
                </div>
                <div class="item-content">
                    <span><i class="fas fa-handshake"></i></span>
                    <h2>Our Mission</h2>
                    <div class="line2"></div>
                    <p class="text ty">
                        <p class="nviiri">To offer our clients integrated business advisory services that will lead to businesses/Institution growth to higher performance levels with affordable costs.</p><br>
                        <p class="nviiri">To equip our clients and their staff with skills and knowledge that will lead to sustainable business structures and business growth.</p><br>
                        <p class="nviiri">To empower the society through  capacity building in financial management and all rounded life skills  with an aim to improve their livelihood and economy.</p>
                    </p>
                    
                </div>

            </div>

        </div>

    </section>


    <!--pricing home sect-->
    <section class="price" id="price">
        <div class="box">
            <div class="tittle">
                <h2>Our Package</h2>
                <p class="text">We offer various services</p>
            </div>
            <div class="row">
                <div class="price-item anileft">
                    <h2>Finance Management</h2>
                    <ul>
                        <li><span class="oya">&#10004;</span><br>system audit</li>
                        <li><span class="oya">&#10004;</span><br>Financial audit</li>
                        <li><span class="oya">&#10004;</span><br>Operational audit</li>
                        <li><span class="oya">&#10004;</span><br>Forensic audit</li>
                    </ul>
                    <div class="ptag">
                        <span>$1400</span>
                        <span class="text">Each Monthly</span>
                    </div>

                </div>
                <div class="price-item aniright">
                    <h2>Operation Management</h2>
                    <ul>
                        <li><span class="oya">&#10004;</span><br>Value Added Tax (VAT)</li>
                        <li><span class="oya">&#10004;</span><br>Income tax</li>
                        <li><span class="oya">&#10004;</span><br>Capital Gains Tax (CGT)</li>
                        <li><span class="oya">&#10004;</span><br>Betting and Pool Tax</li>
                    </ul>
                    <div class="ptag">
                        <span>$1400</span>
                        <span class="text">Each Monthly</span>
                    </div>

                </div>
                <div class="price-item aniright">
                    <h2>Strategic Management</h2>
                    <ul>
                        <li><span class="oya">&#10004;</span><br>Periodic stock count</li>
                        <li><span class="oya">&#10004;</span><br>Continuous or perpetual stock count</li>
                        <li><span class="oya">&#10004;</span><br>Stockout validation</li>
                        <li><span class="oya">&#10004;</span><br>Pick accuracy</li>
                    </ul>
                    <div class="ptag">
                        <span>$1400</span>
                        <span class="text">Each Monthly</span>
                    </div>

                </div>
                <div class="price-item anileft">
                    <h2>Finance Literacy Management</h2>
                    <ul>
                        <li><span class="oya">&#10004;</span><br>Periodic stock count</li>
                        <li><span class="oya">&#10004;</span><br>Continuous or perpetual stock count</li>
                        <li><span class="oya">&#10004;</span><br>Stockout validation</li>
                        <li><span class="oya">&#10004;</span><br>Pick accuracy</li>
                    </ul>
                    <div class="ptag">
                        <span>$1400</span>
                        <span class="text">Each Monthly</span>
                    </div>

                </div>
    
            </div>
        </div>
    </section>

    <!--video home sect-->
    <section class="video" id="pavida">
        <div class="box anileft">
            <a class="center z14"  style="text-decoration: none;">
                <i class="fas fa-play"></i>
            </a>
            <h2>Watch Sample Video</h2>
            <p>Experience some of our activities during field work</p>
        </div>
    </section>

    <!--Team home sect-->
    <section class="team" id="team">
        <div class="box">
            <div class="tittle">
                <h2>Our Team All Inclusive</h2>
                <p class="text">Our Team</p>
            </div>
            <div class="row owl-carousel owl-theme">
        
                <div class="t-item">
                    <div class="t-img">
                        <img src="/img/homeimg/userp/401.jpg" alt="">
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
                        <h3>Leah Mburu</h3>
                        <span>Managing Director / Lead Consultant</span>
                    </div>
                </div>
                <div class="t-item">
                    <div class="t-img">
                        <img src="/img/homeimg/userp/18.jpg" alt="">
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
                        <h3>Roseanne Mbaya</h3>
                        <span>Training and capacity building</span>
                    </div>
                </div>
                <div class="t-item">
                    <div class="t-img">
                        <img src="/img/homeimg/userp/77.jpg" alt="">
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
                        <h3>Joyness Kazimoto</h3>
                        <span>Tanzanian Auditor</span>
                    </div>
                </div>
                <div class="t-item">
                    <div class="t-img">
                        <img src="/img/homeimg/userp/1.jpg" alt="">
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
                        <h3>Rispah Kariuki</h3>
                        <span>Senior business development professional</span>
                    </div>
                </div>
                <div class="t-item">
                    <div class="t-img">
                        <img src="/img/homeimg/userp/9.jpg" alt="">
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
                        <h3>Rogers Kasawuli</h3>
                        <span>In charge of Rwanda and Uganda operations</span>
                    </div>
                </div>
            

            </div>
        </div>
    </section>
    <!--questions home sect-->
    <section class="qstn">
        <div class="box">
            <div class="tittle">
    
                <h2>Have Any Question For Us?</h2>
                <p class="text">We Here For You &#128579;</p>
            
            </div>
            <div class="row anibottom">
                <div class="qstn-item">
               
                    <div class="qstn-head">
                        <h3>How can you reach us?</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <p class="text">You can reach us at the 7th cloud high in the cloud or.... You can email us at
                            <a href="#" class="k">kennedymwaura155@gmail.com</a>
                        </p>
                        <p class="text">You can also talk to us through our office on 0712 044 160 or 0735 257 803<br>
                        &#128521; </p>
                    </div>
            
                </div>
                <div class="qstn-item">
                
                    <div class="qstn-head">
                        <h3>Where to start?</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <p class="text">Book an appointment through our office secretary and have a look at our outlined services for you to point out your area of interest that you would want us to help you out with.</p>
                        <p class="text">Our Secretary will take you through our fairly pricing list on the various services we provide... You can also talk to her through her office line on <a
                                href="#" class="k">0712 044 160</a><br> &#128521;</p>
                    </div>
                
                </div>
                <div class="qstn-item">
              
                    <div class="qstn-head">
                        <h3>Any Suggestion?</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <textarea class="rt" id="complain" name="complain" rows="4" cols="50"
                            placeholder="Message"></textarea><br>
                        <a href=""><button class="btn-3">Submit</button></a><br>&#128521;
                    </div>
                
                </div>
                <div class="qstn-item">
                
                    <div class="qstn-head">
                        <h3>Complain??</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <textarea class="rt" id="complain" name="complain" rows="4" cols="50"
                            placeholder="Message"></textarea><br>
                        <a href=""><button class="btn-3">Submit</button></a><br>&#128521;
                    </div>
                 
                </div>
                <div class="qstn-item">
            
                    <div class="qstn-head">
                        <h3>Have More Question For Us?</h3>
                        <span><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="qstn-content">
                        <textarea class="rt" id="complain" name="complain" rows="4" cols="50"
                            placeholder="Message"></textarea><br>
                        <a href=""><button class="btn-3">Submit</button></a><br>&#128521;
                    </div>
                
                </div>
            </div>
        </div>
    </section>

    <!--Response home sect-->
    <section class="response" id="response"style="background-image: linear-gradient(rgba(27,188,156,0.8), rgba(27,188,156,0.9)), url(/img/homeimg/inter.jpg);">
        <div class="box">
            <div class="tittle">
           
                <h2>Testimonial Words</h2>
                <p class="text">Clients Response</p> <br>
                <i class="far fa-comment-alt fa-2x"></i>
            
            </div>
            <div class="row owl-carousel owl-theme">
            
                <div class="response-item">
                    <div class="response-img">
                        <img src="/img/homeimg/cusp/68.jpg" alt="">
                    </div>
                    <span>@Loise Wanjiru &#10084;&#65039; &#10084;&#65039; &#10084;&#65039;</span>
                    <p>
                    ...I had my whole lost stock replaced all thanks to Mwaura Kennedy Firm...
                    </p>

                </div>
                <div class="response-item">
                    <div class="response-img">
                        <img src="/img/homeimg/cusp/50.jpg" alt="">
                    </div>
                    <span>@Wangari Ruth &#128522; &#128156;</span>
                    <p>
                    ...Thanks to Mwaura Kennedy FIRM my business records are secured and up to date...
                    </p>

                </div>
                <div class="response-item">
                    <div class="response-img">
                        <img src="/img/homeimg/cusp/401.jpg" alt="">
                    </div>
                    <span>@Mwaura Kennedy &#128526;</span>
                    <p>
                    ...We need more firms like Mwaura Kennedy Firm...
                    </p>

                </div>
                
            </div>
        </div>
    </section>
    <!--contact home sect-->
    <section class="lol" id="contact">
        <div class="box">
            <div class="tittle">
            
                <h2>Contact Us</h2>
                <p class="text">Reach Us Through</p>
            
            </div>
            <div class="row">
    
                <div class="c-l anibottom">
                    <div class="mwathani"><iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Murang'a%20University&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
                        <h2>Get In Touch</h2>
                        <span>We Here For You &#128579;</span>
                        <input type="text" class="fin" placeholder="Name">
                        <input type="email" class="" placeholder="Example@gmail.com">
                        <input type="text" class="" placeholder="Subject">
                        <textarea placeholder="Your Message" rows="10" cols="30"></textarea>
                        <button type="submit" class="send-btn">Submit</button>
                    </form>
                    <div>
                        <h2>Also through:</h2><br>
                        <i class="far fa-envelope"></i>
                        <p>info@ifmcltd.com / leah@ifmcltd.com</p><br>
                        <i class="fas fa-phone-alt"></i>
                        <p>+254768072844</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
</section>
@endsection