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
                            <a href="#" id={!! $post->uniqid!!} class="continue_reading" onclick="ChangePhase()">CONTINUE READING <i class="fas fa-long-arrow-right"></i></a>
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
            <section class="cKaiga smoke_good">
                <div class="main-kaiga">
                    <div class="back-page"><a href="#"><i class="fas fa-long-arrow-left"></i> BACK</a></div>
                    
                    <div class="subject-class">
                        <div class="hding"><h1>2022-01-23</h1></div>
                        <div class="kaiga-img" id="tengana">
                            <img class="fk" src="/img/newsimg/1.gif" alt="">
                        </div>
                        <div class="kaiga-dtail">
                            <h4>END OF THE YEAR AUDIT</h4>
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

                        </div>
                        <div class="recent-kaiga-details">
                            <p><a href="#" onclick="Avril()">21-11-2022: 25 YEARS OF GREATNESS</a></p>
                           
                    </div>
                    <div class="rcomments-kaiga">
                        <div class="rcomments-kaiga-heading">Recent Comments</div>
                        <div class="rcomments-kaiga-details">
                            <p>"What is our current V.A.T"</p>
                           
                        </div>
                       
                        <div class="rcomments-kaiga-details">
                            <p>"Hapa cynthia rutherock ni moto wa pazi"</p>
                         
                        </div>
                    </div>
                    <div class="archive-kaiga">
                        <div class="archive-kaiga-heading">Archive</div>
                        <div class="archive-kaiga-details">
                           
                            <p><a href="#"  onclick="ChangePhase()">January 2022 <i class="fas fa-long-arrow-right"></i></a></p>
                           
                        </div>
                    </div>
      
                </div>
            </section>
        </section>
</section>
@endsection