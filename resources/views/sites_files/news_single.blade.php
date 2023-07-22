@extends('sites_files.footers')
@section('content')


<!--home wehere it happens section--> 
<section class="p-14">

<section class="news-form">
            <section class="introd">
                <p class="hd-change">/ News<p1 class="altH"> ~> Newsletter</p1></p>
            </section>
            <section class="cKaiga">
                <div class="main-kaiga">
                    <div class="back-page"><a href="#"><i class="fas fa-long-arrow-left"></i> BACK</a></div>
                    
                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-23</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/1.gif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>END OF THE YEAR AUDIT</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-21</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/2.jpg" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>THE TAKE OFF</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-14</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/partewesay.jpg" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>BOOMING PERIOD</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-12</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/kk3.gif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>TESTING PERIOD</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>

                    <div class="subject-kaiga">
                        <div class="hding"><h1>2022-01-05</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/dt.jfif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>START OF THE YEAR AUDIT</h4>
                            <p>We just did it. We acquired maximum profit and were ranked top from comparison from competitors.</p>
                        </div>
                    </div>
                  
                    <div class="change-kaiga">
                        <div class="tengana">
                            <div class="tengana-left"><a href="#tengana" onclick="bringPrev()"><i
                                        class="fas fa-long-arrow-left"></i> PREVIOUS</a></div>
                            <div class="tengana-right"><a href="#tengana" onclick="bringNext()">NEXT <i
                                        class="fas fa-long-arrow-right"></i></a></div>
                        </div>
                    </div>
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