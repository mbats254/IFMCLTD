@extends('sites_files.footers')
@section('content')
     
     <!--book service-->
     <div class="bookform">
        <div class="bookfin kuanileft">
            <div class="b-out">
                <i class="fas fa-times"></i>
            </div>
            <div class="b-hd">
                <h1>Book Service</h1>
            </div>
            <div class="b-body">
                <div class="b-ser">Service: <input type="text"></div>
                <div class="b-com">Company: <input type="text"></div>
                <div class="b-dat">Date / time: <input type="datetime-local"></div>
                <div>Description of Task <br>
                    <textarea name="dtask" id="dtask" cols="30" rows="8"></textarea>
                </div>
                <div>Contact <br>
                    <div class="b-tel">Tel: <input type="text"></div>
                    <div class="b-ema">Email: <input type="email"></div>
                </div>
                <div>Means of Payment:<br>
                    <div><input type="radio" id="M-PESA" name="malipo" value="M-PESA">
                        <label for="M-PESA">M-PESA</label><br>
                        <input type="radio" id="CO-OPERATIVE" name="malipo" value="CO-OPERATIVE">
                        <label for="CO-OPERATIVE">CO-OPERATIVE BANK</label><br>
                        <input type="radio" id="EQUITY" name="malipo" value="EQUITY">
                        <label for="EQUITY">EQUITY BANK</label>
                    </div>
                </div>
                <button>Submit</button>
            </div>
        </div>
    </div>
<!--home wehere it happens section-->   
 <section class="p-14">

  <!--service section-->

  <section class="service-form">
  
            <section class="intro-Audit">
                <p>/ Our Services -<span>/ {!!  $single_service->name !!}</span></p>
                <a href="/our/services" class="bckbtn1" style="text-decoration: none;"><span class="dr2"><i class="fas fa-door-open"></i></span><span
                        class="dr1"><i class="fas fa-door-closed"></i></span> Back to Service</a>
            </section>
            <section class="Audit-detail-body">
                <div class="first-Audit">
                    <div class="fa-left">
                        <h2> {!!  $single_service->name !!}</h2>
                        <p>{!!  $single_service->service_description !!}</p>
                                                    <h1>We help you with:</h1>
                        
                        <p>
                        {!! $single_service->how_we_can_help !!}
                        </p>
                    </div>
                    <div class="fa-right">
                        <img src="{!! $single_service->page_photo !!}" alt="" height="500" width="100%">
                    </div>
                </div>
                <div class="bookservice"> <button class="bsbtn">BOOK SERVICE</button></div>

            </section>
        

    </section>     
</section>
  

@endsection