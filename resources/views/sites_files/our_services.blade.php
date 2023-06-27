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
                @foreach($services as $service =>$values)
                    <div class="serv-icon si1">
                        <a href="{{ route('single.service',$values->uniqid) }}" class="isize"><i class="fas fa-balance-scale"></i></a>
                        <p class="serv-icon-name">{!!  $values->name !!}</p>
                    </div>

                    @endforeach
             
              
                    
                </section>
            </section>
        </section>
</section>
@endsection