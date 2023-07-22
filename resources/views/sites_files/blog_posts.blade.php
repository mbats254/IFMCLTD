@extends('sites_files.footers')
@section('content')
<!--home wehere it happens section-->   
 <section class="p-14">

      <!--news section-->

      <section class="news-form">
            <section class="introd">
                <p class="hd-change">/ News</p>
            </section>

            <section class="blog page1-active">
                <section class="page1">
                
                        @foreach ($blog_posts as $post)
                            
                        
                  
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src={!! $post->photo !!} alt="">
                        </div>
                        <div class="blog-details">
                            <h4>{!! $post->title !!}</h4>
                            <p>{!!      substr($post->paragraph, 0, 50); !!}.</p>
                            <a href="{!! route('single.news.post',[$post->uniqid]) !!}"  class="continue_reading" onclick="ChangePhase()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        <h1>{!! date_format($post->updated_at,"j<\s\up>S</\s\up> M Y") !!}</H1>
                    </div>

                    @endforeach
              
                </section>
            </section>
            <section class="page-numbers weeknd-active">
                <ul class="weeknd">
                    <li class=""><a href="/news" class="pg1 pantha paranoid">Jan</a></li>

                </ul>
            </section>
            <section class="year-change yr-pg1-active">
                <div class="yr-pg1">
                    <li><a href="#" class="god6 paranoid y22">2022</a></li>
                  
                    <div class="old-nxt old-1"><a href="#">older <i class="fas fa-long-arrow-right"></i></a></div>
                </div>
            </section>
           
        </section>
</section>
<script>
     //next & Previous
     var ondisplayDiv = 0;
        function showPage() {
            $(".subject-kaiga").hide();
            $(".subject-kaiga:eq(" + ondisplayDiv + ")").show();
        }
        showPage()
        var dateDisplay = 0;
        function datePage() {
            $(".recent-kaiga-details").hide();
            $(".recent-kaiga-details:eq(" + dateDisplay + ")").show();
        }
        datePage()
        var commentsDisplay = 0;
        function commentPage() {
            $(".rcomments-kaiga-details").hide();
            $(".rcomments-kaiga-details:eq(" + commentsDisplay + ")").show();
        }
        commentPage()
        var relatedDisplay = 0;
        function relatedPage() {
            $(".related-kaiga-body").hide();
            $(".related-kaiga-body:eq(" + relatedDisplay + ")").show();
        }
        relatedPage()
        
        function bringNext() {
            if (ondisplayDiv == $(".subject-kaiga").length - 1) {
                ondisplayDiv = 0;
            }
            else {
                ondisplayDiv++;
            }
            showPage();
            if (dateDisplay == $(".recent-kaiga-details").length - 1) {
                dateDisplay = 0;
            }
            else {
                dateDisplay++;
            }
            datePage();
            if (commentsDisplay == $(".rcomments-kaiga-details").length - 1) {
                commentsDisplay = 0;
            }
            else {
                commentsDisplay++;
            }
            commentPage();
            if (relatedDisplay == $(".related-kaiga-body").length - 1) {
                relatedDisplay = 0;
            }
            else {
                relatedDisplay++;
            }
            relatedPage();
        }
        function bringPrev() {
            if (ondisplayDiv == 0) {
                ondisplayDiv = $(".subject-kaiga").length - 1;
            }
            else {
                ondisplayDiv--;
            }
            showPage();
            if (dateDisplay == 0) {
                dateDisplay = $(".recent-kaiga-details").length - 1;
            }
            else {
                dateDisplay--;
            }
            datePage();
            if (commentsDisplay == 0) {
                commentsDisplay = $(".rcomments-kaiga-details").length - 1;
            }
            else {
                commentsDisplay--;
            }
            commentPage();
            if (relatedDisplay == 0) {
                relatedDisplay = $(".related-kaiga-body").length - 1;
            }
            else {
                relatedDisplay--;
            }
            relatedPage();
        }
        
</script>


@endsection