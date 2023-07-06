@extends('sites_files.footers')
@section('content')

    <!--chat-->
    {{-- <div class="online_chat">
        <a href="#mtexto" id="mchato"><i class="fas fa-comment-alt"></i></a>
    </div>
     --}}
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
                       {!! $site_content->about_us !!}
                        </p>
                    </div>
                    <div class="abt-img"><img src="/img/aboutimg/audit.jpg" alt="" height="400"></div>
                </div>
            </section>

            <section class="team-qualify">
            
                <h1 class="gang_head">OUR STAFF MEMBERS</h1>
                <p class="gang_sub"></p>
                @foreach($team_members as $member => $values)
            
                <div class="ceo inboxx reveal">
                    <div class="ceo_img"><img src={!! $values->photo !!} alt=""></div>
                    <div class="ceo_details">
                        <h1>{!! $values->name !!}</h1>
                        <h2>{!! $values->position !!}</h2>
                        <p>
                        {!! $values->bio !!}
                        </p>
                    </div>
                </div>
                @endforeach
                   
                
            </section>
          
        </section>
</section>
@endsection