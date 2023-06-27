{{-- @extend('') --}}
@extends('sites_files.footers')
@section('content')

    <!--chat-->
    <div class="online_chat">
        <a href="#mtexto" id="mchato"><i class="fas fa-comment-alt"></i></a>
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
            @foreach($snapshots as $snapshot=> $values )
            <div class="ip">

                <div class="full-slider-box f-slide-1" style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.7)),url(/img/homeimg/customers.jpg);">
                    <div class="wabebe">
                        <div class="f-slider-text">
                            <span class="opnin">{!! $values->title !!}</span>
                            {{-- <strong>Integrated Financial <br>Management <br>Consultants Limited<br>  --}}
                                <font>{!! $values->accompanying_text !!}</font>
                            </strong>
                            <div class="m-btn">
                                <a href="/service" class="f-slider-btn service Sf">Our Services</a>
                                <a href="/about" class="f-btn about Af">About Us</a>
                            </div>
                        </div>

                    </div>
                </div>
             
            </div>

            @endforeach
           


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
                        {!! $site_content->about_home_paragraph !!}
                        </p>
                        <div class="right aniright">
                            @foreach($services as $service => $values)
                            <div class="serv-icon si1">
                                <a href="{{ route('single.service',$values->uniqid) }}" class="isize AAbtn ps-4 pe-4 pb-2" style="border: 1px solid rgba(0, 0, 0, 0.3); border-radius: 5px;"><i class={!! $values->icon  !!}></i></a>
                                <p class="serv-icon-name">{!!  $values->name !!}</p>
                            </div>

                            @endforeach
                          
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
                    <div class="walai">&#10004;</div> <p class="nviiri">{!! $site_content->our_goal  !!}</p><br>

                    
                    </p>

                </div>
                <div class="item-content">
                    <span><i class="fas fa-eye"></i></span>
                    <h2>Our Vision</h2>
                    <div class="line2"></div>
                    <p class="text ty">
                    {!! $site_content->vision !!}
                    </p>
        
                </div>
                <div class="item-content">
                    <span><i class="fas fa-handshake"></i></span>
                    <h2>Our Mission</h2>
                    <div class="line2"></div>
                    <p class="text ty">
                        <p class="nviiri">{!! $site_content->mission !!}</p><br>
                        
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
                @foreach($services as $service =>$values)
                <div class="price-item anileft">
                   
                    <h2>{!! $values->name !!}</h2>
                    <ul>

                        <li><span class="oya">&#10004;</span><br>{!! $values->what_we_offer !!}</li>
                        
                    </ul>
                    <div class="ptag">
                        <span>{!! $values->price !!}</span>
                        <span class="text">Each Monthly</span>
                    </div>

                </div>
                @endforeach
               
            
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
                @foreach($team_members as $team =>$values)
                <div class="t-item">
                    <div class="t-img">
                        <img src="{!! $values->photo !!}" alt="">
                        <div class="t-icon">
                            <a href="{!! $values->facebook !!}" class="center"  style="text-decoration: none;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            < href={!! $values->twitter !!} class="center"  style="text-decoration: none;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href={!! $values->instagram !!}  class="center"  style="text-decoration: none;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="t-info">
                        <h3>{!! $values->name   !!}</h3>
                        <span>{!! $values->position !!}</span>
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
    
                <h2>Have Any Question For Us?</h2>
                <p class="text">We Here For You &#128579;</p>
            
            </div>
            <div class="row anibottom">
                
                @foreach($faqs as $faq =>$values)
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
                @endforeach
                
                <div class="qstn-item">
                    <form mathod="POST" action="{!! route('post.suggestion_complain_question') !!}">
                        <div class="qstn-head">
                            <h3>Any Suggestion or Complain or Question?</h3>
                            <span><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="qstn-content">
                            <textarea class="form-control" id="suggestion_complain_question" name="suggestion_complain_question"
                                placeholder="Message"></textarea><br>
                            <button class="btn-3">Submit</button><br>&#128521;
                        </div>
                    </form>
                    
                
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
                @foreach($testimonials as $testimonial =>$values)
                <div class="response-item">
                    <div class="response-img">
                        <img src="{!!  $values->photo !!}" alt="">
                    </div>
                    <span>{!!  $values->name !!} &#10084;&#65039; &#10084;&#65039; &#10084;&#65039;</span>
                    <p>
                    {!! $values->comment !!}
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
                    <form method="POST" action={!! route('contact.us.post') !!}>
                        @csrf
                        <h2>Get In Touch</h2>
                        <span>We Here For You &#128579;</span>                        
                        <input type="text" name="name" class="fin" placeholder="Name">
                        <input type="email" name="email" class="" placeholder="Example@gmail.com">
                        <input type="text" name="subject" class="" placeholder="Subject">
                        <textarea name="message" placeholder="Your Message" rows="10" cols="30"></textarea>
                        <button type="submit" class="send-btn">Submit</button>
                    </form>
                    <div>
                        <h2>Also through:</h2><br>
                        <i class="far fa-envelope"></i>
                        <p>{!! $contact_information->email !!}</p><br>
                        <i class="fas fa-phone-alt"></i>
                        <p>{!! $contact_information->phone_number !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
</section>
@endsection