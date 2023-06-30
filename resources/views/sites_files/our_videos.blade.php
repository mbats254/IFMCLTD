@extends('sites_files.footers')
@section('content')
<!--home wehere it happens section-->   
 <section class="p-14">
            <section class="introd">
                <p class="hd-change">/ Videos</p>
            </section>
<div class="up_vid">
<!--video-section-->
@foreach($innovation_posts as $videos => $values )
            
                <div class="yuk">
                    
                    <iframe width="100%" height="200" src={!! $values->link !!}
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                        <div class="vmpango">
                        
                       <h1>1.</h1>
                        <div class="vdetail">
                        <h1>{!! $values->name !!}</h1>
                        <P>{!! $values->description !!}</P>
                       </div>
                        </div>
                        
                        
                </div>
                
              @endforeach
                
               
              
                
                
               
               
               
           
</div>
</section>
@endsection