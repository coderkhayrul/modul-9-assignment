@extends('layouts.master')
@section('title', 'Home')

@section('content')
    <!--================ Start Home Banner Area =================-->
    @include('includes.banner')
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{ asset('website') }}/img/about-us.png" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>let’s <br>
                            Introduce about <br>
                            myself</h2>
                        <p>
                            Hello, my name is Khayrul.
                        </p>
                        <p>
                            I am a skilled and experienced web developer with a passion for creating high-quality, user-friendly websites.
                            I have a strong foundation in HTML, CSS, and JavaScript, Vue and
                            I am also proficient in a variety of front-end and back-end frameworks, including PHP, Laravel.
                        </p>
                        <p>
                            I have a proven track record of success in developing websites of all sizes and complexities.
                            I am a highly motivated and results-oriented individual, and
                            I am always looking for new challenges to expand my skills and knowledge.
                        </p>
                        <a class="primary_btn" href="https:///www.khayrulshanto.com"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Start Features Area =================-->
    <section class="features_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>Skills </h2>
                        <p>
                            Is give may shall likeness made yielding spirit a itself togeth created
                            after sea <br> is in beast beginning signs open god you're gathering ithe
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s1.png" alt="">
                        <h4>PHP</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s2.png" alt="">
                        <h4>LARAVEL</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s2.png" alt="">
                        <h4>MYSQL</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s3.png" alt="">
                        <h4>BOOTSTRAP</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s4.png" alt="">
                        <h4>TAILWINDCSS</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s1.png" alt="">
                        <h4>JAVASCRIPT</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s3.png" alt="">
                        <h4>JQUERY</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('website') }}/img/services/s4.png" alt="">
                        <h4>HTML5 & CSS</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->

@endsection
