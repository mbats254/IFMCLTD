@extends('sites_files.footers')
@section('content')

<!--home wehere it happens section-->   
 <section class="p-14">

 <!--contact section-->

 <section class="contact-form">
        
            <section class="introd">
                <p>/ Contact</p>
            </section>
            <section class="contact-details">
                <div class="location">
                    <span>GET IN TOUCH</span>
                    <H2>Visit our agency location or contact us</H2>
                    <h3>Head Office</h3>
                    <div>
                        <li>
                            <i class="far fa-building"></i>
                            <p>{!! $contact_information->P_O_address !!}</p>
                            <p>{!! $contact_information->physical_location !!}</p>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                            <p>{!! $contact_information->email !!}</p>
                            {{-- <p>leah@ifmcltd.com</p> --}}
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <p>+{!! $contact_information->phone_number !!}</p>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>
                            <p>Monday to Friday: 8:15am to 4.30pm</p>
                            <p>Saturday: 9:00am to 3:40pm</p>
                        </li>
                    </div>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                            src="{!! $contact_information->map_link !!}"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://123movies-to.org"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 50%;
                            }
                        </style><a href="https://www.embedgooglemap.net"></a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                            }
                        </style>
                    </div>
                </div>
            </section>
        
            <section class="email-staff">
                <form method="POST" action="{{ route('contact.us.post') }}">
                    @csrf
                    <span>MESSAGE</span>
                    <h2>We Here For You &#128579;</h2>
             
                    <input type="text" name="name" class="" placeholder="Name">
                    <input type="email" name="email" class="" placeholder="Example@gmail.com">
                    <input type="text" name="subject" class="" placeholder="Subject">
                    <textarea name="message" placeholder="Your Message" rows="10" cols="30"></textarea>
                    <button type="submit" class="send-btn">Submit</button>
                </form>
                <div class="talk-staff">
                @foreach($team_members as $member =>$values )
                    <div>
                        <img src="{!! $values->photo !!}" alt="">
                        <p><span>{!! $values->name !!}</span>{!! $values->position !!}<br>phone: {!! $values->phone_number !!}<br>Email:{!! $values->email !!}</p>
                    </div>
                    @endforeach
                 
        
                </div>
            </section>
        </section>
</section>
@endsection