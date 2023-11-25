@extends('layouts.master')
@section('title', 'Project')
@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Project</h2>
                <div class="page_link">
                    <a href="{{ route('website.home') }}">Home</a>
                    <a href="javascript::void(0)">Project</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio_area section_gap_top" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title text-left">
                    <h2>quality work <br>
                        Recently done project </h2>
                </div>
            </div>
        </div>
        <div class="row portfolio-grid justify-content-center">
            <div class="col-lg-4 col-md-6 all latest">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/img/portfolio/p1.jpg" alt="">
                        <div class="overlay"></div>
                        <a href="{{ asset('website') }}/img/portfolio/p1.jpg" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a target="_blank" href="https://www.amardeshamarponno.com">Amar Desh Amar Ponno</a></h4>
                        <p>E-commerce</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 all popular">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/img/portfolio/p2.jpg" alt="">
                        <div class="overlay"></div>
                        <a href="{{ asset('website') }}/img/portfolio/p2.jpg" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a target="_blank" href="https://www.clickandpath.com">Click And Path</a></h4>
                        <p>Agency</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 all latest">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/img/portfolio/p3.jpg" alt="">
                        <div class="overlay"></div>
                        <a href="{{ asset('website') }}/img/portfolio/p3.jpg" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a target="_blank" href="https://ebusinessscholar.com">Business Scholar</a></h4>
                        <p>E-Lerning</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 all popular">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/img/portfolio/p4.jpg" alt="">
                        <div class="overlay"></div>
                        <a href="{{ asset('website') }}/img/portfolio/p4.jpg" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a target="_blank" href="https://kurtibari.com">Kurti Bari</a></h4>
                        <p>Ecommerce</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 all following">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/img/portfolio/p6.jpg" alt="">
                        <div class="overlay"></div>
                        <a href="{{ asset('website') }}/img/portfolio/p5.jpg" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a target="_blank" href="https://clipingpath.com">Cliping Path</a></h4>
                        <p>Agency</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 all upcoming following">
                <div class="portfolio_box">
                    <div class="single_portfolio">
                        <img class="img-fluid w-100" src="{{ asset('website') }}/img/portfolio/p7.jpg" alt="">
                        <div class="overlay"></div>
                        <a href="{{ asset('website') }}/img/portfolio/p7.jpg" class="img-gal">
                            <div class="icon">
                                <span class="lnr lnr-cross"></span>
                            </div>
                        </a>
                    </div>
                    <div class="short_info">
                        <h4><a target="_blank" href="http://infotechsolutionltd.com/">Info Tech Solution</a></h4>
                        <p>Agency</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
