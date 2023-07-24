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
                
                        
                  @foreach ($blog_posts as $post => $values)
                      
                
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{!! $values->photo !!}" alt="">
                        </div>
                        <div class="blog-details">
                            <h4>{!! $values->title !!}</h4>
                            <p>{!! $values->paragraph !!}</p>
                            <a href="{{ route('single.news.post',[$values->uniqid]) }}" class="kiburn" onclick="Post1()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                        {{-- <h1>{!! date('M j\<\s\u\p\>S\<\/\s\u\p\> Y', $values->updated_at); !!}</h1> --}}
                        <h1>{!! date_format($values->updated_at,"j<\s\up>S</\s\up> M  Y"); !!}</h1>
                    </div>
                    @endforeach
                   

                  

                   

                   
              
                </section>
            </section>
        </section>
</section>

   
    <script type="text/javascript">
        //back
        $(document).on('click', '.back-page', function () {
            $('.blog').addClass('page1-active').removeClass('kkyt')
        });
        $(document).on('click', '.back-page', function () {
            $('.page-numbers').addClass('weeknd-active').removeClass('kkyt')
        });
        $(document).on('click', '.back-page', function () {
            $('.year-change').addClass('yr-pg1-active').removeClass('kkyt')
        });
        $(document).on('click', '.back-page', function () {
            $('.hd-change').removeClass('ongeza-head')
        });
        $(document).on('click', '.back-page', function () {
            $('.cKaiga').addClass('smoke_good')
        });
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
        function Post1(){
            ondisplayDiv = 0;
            showPage();
            dateDisplay = 0;
            datePage();
            commentsDisplay = 0;
            commentPage();
            relatedDisplay = 0;
            relatedPage();
        }
        function Post2(){
            ondisplayDiv = 1;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 1;
            commentPage();
            relatedDisplay = 1;
            relatedPage();
        }
        function Post3(){
            ondisplayDiv = 2;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 2;
            commentPage();
            relatedDisplay = 2;
            relatedPage();
        }
        function Post4(){
            ondisplayDiv = 3;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 3;
            commentPage();
            relatedDisplay = 3;
            relatedPage();
        }
        function Post5(){
            ondisplayDiv = 4;
            showPage();
            dateDisplay = 1;
            datePage();
            commentsDisplay = 4;
            commentPage();
            relatedDisplay = 4;
            relatedPage();
        }
    </script>
    @endsection
   