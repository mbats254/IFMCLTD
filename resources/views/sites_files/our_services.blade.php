@extends('sites_files.footers')
@section('content')


    
<!--home wehere it happens section-->   
 <section class="p-14">

  <!--service section-->

  <section class="service-form">
 
            <section class="introd">
                <p>/Our/Services </p>
            </section>
            <section class="service-head-body">
                <div class="srv-heading">
                    <h2>Our Package</h2>
                    <p>A firm entrusted with quality and efficiency on service provision</p>
                </div>

                <section class="sv-body">
                @foreach($services as $service =>$values)
                    <div class="serv-icon si1">
                        <a href="{{ route('single.service',$values->uniqid) }}" class="isize"><i class={!! $values->icon !!}></i>
                        <p class="serv-icon-name">{!!  $values->name !!}</p></a>
                    </div>

                    @endforeach
             
              
                    
                </section>
            </section>
        </section>
</section>
@endsection