@extends('sites_files.footers')
@section('content')
    <section class="p-14">

    <section class="news-form">
                <section class="introd">
                    <p class="hd-change">/ News<p1 class="altH"> ~> Newsletter</p1></p>
                </section>
                <section class="cKaiga ">
                    <div class="main-kaiga">
                        <div class="back-page"><a href="{!! route('blog.news') !!}"><i class="fas fa-long-arrow-left"></i> BACK</a></div>
                        
                        <div class="subject-kaiga">
                            
                            <div class="hding"><h1>{!! date_format( $news_post->updated_at,"j<\s\up>S</\s\up> M  Y"); !!}</h1></div>
                            <div class="kaiga-img" id="tengana">
                                <img class="fk" src="{!! $news_post->photo !!}" alt="">
                            </div>
                            <div class="kaiga-dtail">
                                <h4>{!! $news_post->title !!}</h4>
                                <p>{!! $news_post->paragraph !!}</p>
                            </div>
                        </div>
    
                       
                        {{-- <div class="change-kaiga">
                            <div class="tengana">
                                <div class="tengana-left"><a href="#tengana" onclick="bringPrev()"><i
                                            class="fas fa-long-arrow-left"></i> PREVIOUS</a></div>
                                <div class="tengana-right"><a href="#tengana" onclick="bringNext()">NEXT <i
                                            class="fas fa-long-arrow-right"></i></a></div>
                            </div>
                        </div> --}}
                       
                    </div>
                   
                    
                </section>
                </section>
    </section>
    
    <script src="jQuery.js"></script>
    <script src="triggerscript.js"></script>
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