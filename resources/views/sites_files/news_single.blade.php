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
                    <div class="related-kaiga">
                        <div class="related-kaiga-heading">Related Posts</div>
                        <div class="related-kaiga-body">
                        <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/2.jpg" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>14th February 2021</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/kk.gif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>23rd February 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/1.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>12th March 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/dt.jfif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>21st February 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/kk4.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>14th February 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/t.gif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>5th July 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/kk3.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>21st July 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/2.jpg" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>23rd February 2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="related-kaiga-body">
                            <div class="item1-kaiga">
                                <div class="item1-kaiga-img">
                                    <img src="/img/newsimg/kk5.gif" alt="">
                                </div>
                                <div class="item1-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>5th June 2022</p>
                                </div>
                            </div>
                            <div class="item2-kaiga">
                                <div class="item2-kaiga-img">
                                    <img src="/img/newsimg/kk7.gif" alt="">
                                </div>
                                <div class="item2-kaiga-dtail">
                                    <h4>25 Years of Greatness</h4>
                                    <p>5th March 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mini-kaiga">
                    <div class="recent-kaiga">
                        <div class="recent-kaiga-heading">Recent Posts</div>
                        <div class="recent-kaiga-details">
                            <p><a href="#" onclick="WillyPaul()">12-04-2022: 25 YEARS OF GREATNESS</a></p>
                            <p><a href="#" onclick="Ssaru()">23-03-2022: END OF MARCH TAX SUMMARY</a></p>
                            <p><a href="#" onclick="Jovial()">14-03-2022: TAXATION FOR CRYPTOCURRENCY</a></p>
                            <p><a href="#" onclick="Naiboi()">5-03-2022: KENYA BUDGET SPEECH </a></p>
                            <p><a href="#" onclick="OtileBrown()">23-02-2022: NEW BEGINING OF THE WINTER</a></p>
                        </div>
                        <div class="recent-kaiga-details">
                            <p><a href="#" onclick="Avril()">21-11-2022: 25 YEARS OF GREATNESS</a></p>
                            <p><a href="#" onclick="Nviirithestoryteller()">12-06-2022: END OF MARCH TAX SUMMARY</a></p>
                            <p><a href="#" onclick="SirJames()">14-09-2022: TAXATION FOR CRYPTOCURRENCY</a></p>
                            <p><a href="#" onclick="CampMulla()">5-11-2022: KENYA BUDGET SPEECH </a></p>
                            <p><a href="#" onclick="Wangeshi()">23-05-2022: NEW BEGINING OF THE WINTER</a></p>
                        </div>
                    </div>
                    <div class="rcomments-kaiga">
                        <div class="rcomments-kaiga-heading">Recent Comments</div>
                        <div class="rcomments-kaiga-details">
                            <p>"What is our current V.A.T"</p>
                            <p>"Any Cargo Tax updates"</p>
                            <p>"Can you help me to plan for my business tax and profits margin"</p>
                            <p>"Wow finally a plus for more oxygen for us"</p>
                            <p>"Nice party &#129395; didn't know C.E.O got smooth moves"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"Siakwata siakwata nduru za mukamba"</p>
                            <p>"Too fire"</p>
                            <p>"We too savage"</p>
                            <p>"This shit way too easy"</p>
                            <p>"Wawawawawawawawa"</p>
                            <p>"Wacha tu"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"Suwelo siii"</p>
                            <p>"arakarakarata"</p>
                            <p>"numelo suwelo"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"aah basi mpenzi mtazamaji"</p>
                            <p>"moja kwa moja hadi bankok"</p>
                            <p>"hapa seth lorence anakuandalia"</p>
                            <p>"kipindi cha lala salama"</p>
                        </div>
                        <div class="rcomments-kaiga-details">
                            <p>"Hapa cynthia rutherock ni moto wa pazi"</p>
                            <p>"Aiii nikiii guku kuranuga mitugo"</p>
                            <p>"mimi wako aka kimoda dj afro"</p>
                        </div>
                    </div>
                    <div class="archive-kaiga">
                        <div class="archive-kaiga-heading">Archive</div>
                        <div class="archive-kaiga-details">
                            <p><a href="#"  onclick="Jegede()">April 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#"  onclick="Ssaru()">March 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#"  onclick="OtileBrown()">February 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#"  onclick="Wakadinali()">January 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">December 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">November 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">October 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">September 20221 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">August 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">July 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">June 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">May 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">April 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">March 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">February 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">January 2021 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">December 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">November 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">October 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">September 2020 <i class="fas fa-long-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="categories-kaiga">
                        <div class="categories-kaiga-heading">Categories</div>
                        <div class="categories-kaiga-details">
                            <p><a href="#">Budget <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">General News <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Tax News <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Uncategorised <i class="fas fa-long-arrow-right"></i></a></p>
                        </div>
                    </div>
                    <div class="meta-kaiga">
                        <div class="meta-kaiga-heading">Meta</div>
                        <div class="meta-kaiga-details">
                            <p><a href="#">Log in <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Entries feed <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">Comments feed <i class="fas fa-long-arrow-right"></i></a></p>
                            <p><a href="#">WordPress.org <i class="fas fa-long-arrow-right"></i></a></p>
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