@extends('front-end.layout.app')
@section('content')

    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/uploads/slider-01.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="{{ asset('site/images/logos/logo-hosting.png') }}" alt="image">
                                    <h2 data-animation="animated zoomInRight">Multi <strong>Information</strong> Systems
                                    </h2>
                                    <p class="lead" data-animation="animated fadeInLeft">Multi-Information Systems is a
                                        technology partner leveraging the
                                        latest technologies and premier vendors in the design and support of IT
                                        infrastructure to produce better business outcomes for our clients.. </p>
                                    <a data-scroll href="#pricing"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Network Solutions</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight">Software Solutions</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/uploads/slider-02.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="{{ asset('site/images/logos/logo-hosting.png') }}" alt="image">
                                    <h2 data-animation="animated zoomInRight">Find the right <strong>Solutions</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">We provide software solutions by
                                        creating web and mobile applications as well as solutions for computer networks and
                                        surveillance cameras. </p>
                                    <a data-scroll href="#pricing"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Network Solutions</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight">Software Solutions</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <div class="item">
                <div id="home" class="first-section"
                    style="background-image:url('{{ asset('site/uploads/slider-03.jpg') }}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <img src="{{ asset('site/images/logos/logo-hosting.png') }}" alt="image">
                                    <h2 data-animation="animated zoomInRight">Best <strong>Software & Networking</strong>
                                        Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">1 IP included with each server
                                        (more on request to justification)
                                        Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                        FREE Reboots</p>
                                    <a data-scroll href="#pricing"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInLeft">Network Solutions</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a data-scroll href="#overviews"
                                        class="btn btn-light btn-radius btn-brd effect-1 slide-btn"
                                        data-animation="animated fadeInRight">Software Solutions</a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end section -->
            </div>
            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3 data-aos='zoom-in-down' data-aos-duration='1500'>About</h3>
                    <p data-aos='zoom-in-up' data-aos-duration='1500' data-aos-delay='1600' class="lead">
                        {{ $company->about }}
                    </p>
                </div>
            </div><!-- end title -->
            <hr class="hr3">

            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3 data-aos='zoom-in-down' data-aos-duration='1500' data-aos-delay='3200'>Mission</h3>
                    <p data-aos='zoom-in-up' data-aos-duration='1500' data-aos-delay='4700' class="lead">
                        {{ $company->mission }}
                    </p>
                </div>
            </div><!-- end title -->
            <hr class="hr3">

            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3 data-aos='zoom-in-down' data-aos-duration='1500' data-aos-delay='6300'>Vision</h3>
                    <p data-aos='zoom-in-up' data-aos-duration='1500' data-aos-delay='7900' class="lead">
                        {{ $company->vision }}</p>
                </div>
            </div><!-- end title -->
            <hr class="hr3">
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section cl">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                            class="flaticon-hosting"></i></span>
                    <p class="stat_count">{{ $company->customers }}</p>
                    <h3>Customers</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                            class="flaticon-domain-registration"></i></span>
                    <p class="stat_count">{{ $company->projects }}</p>
                    <h3>Projects</h3>
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
                            class="flaticon-mail"></i></span>
                    <p class="stat_count">{{ $company->partners }}</p>
                    <h3>Partners</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection
