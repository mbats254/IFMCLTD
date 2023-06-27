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
                    <div class="ceo_img"><img src="/img/aboutimg/teamimg/ceo.jpg" alt=""></div>
                    <div class="ceo_details">
                        <h1>LEAH MBURU</h1>
                        <h2>Managing Director / Lead Consultant</h2>
                        <p>
                        She is a Business and Financial Management expert, a holder of an MBA (Finance Option), BCOM (Accounting Option) and a professional ACCA Affiliate. She is currently Pursuing PHD: Public policy programme in the University of Nairobi. Attained a vast working experience of over 25 years in financial management, Accounting, Auditing and taxation, Administration, Operations and logistics management, Strategy and corporate governance, Capacity building and HR management among many more business operational structures.She has been an International financial management expert in business advisory services to help small and medium businesses in strengthening their operations and financial management. She has worked in various sectors among them Manufacturing, Trade business in wholesale and retail, Hospitality, property management, Agriculture and financial sectors. She has been a part time lecturer in KCA University teaching Accounting and finance subjects. She has founded an initiative involved in mentorship and motivation of the youth in career building which include students’ academic excellence.
                        </p>
                    </div>
                </div>
                @endforeach
                   
                
            </section>
          
        </section>
</section>
@endsection