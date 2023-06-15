@extends('sites_files.footers')
@section('content')
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

  <!--service section-->

  <section class="service-form">
 
            <section class="introd">
                <p>/ Service </p>
            </section>
            <section class="service-head-body">
                <div class="srv-heading">
                    <h2>Our Package</h2>
                    <p>A firm entrusted with quality and efficiency on service provision</p>
                </div>

                <section class="sv-body">
                
                    <div class="serv-icon si1">
                        <a href="/servicefinance" class="isize"><i class="fas fa-balance-scale"></i></a>
                        <p class="serv-icon-name">Finance Management</p>
                    </div>
                    <div class="serv-icon si1">
                        <a href="/serviceoperation" class="isize"><i class="fas fa-calculator"></i></a>
                        <p class="serv-icon-name">Operation & Logistic Management</p>
                    </div>
                    <div class="serv-icon si1">
                        <a href="/servicestrategic" class="isize"><i class="fas fa-cloud"></i></a>
                        <p class="serv-icon-name">Strategic Management</p>
                    </div>
                    <div class="serv-icon si1">
                        <a href="/serviceinstitutionleakage" class="isize"><i class="fas fa-clone"></i></a>
                        <p class="serv-icon-name">Finance Literacy & Institution Linkages</p>
                    </div>
              
                    
                </section>
            </section>
        </section>
</section>
@endsection