@extends('front-end.layout.app')
@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{asset('site/images/data_center-server-technology-748x421.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">About Our Company</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light mt-5">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url({{asset('site/images/image_3.jpg')}});">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">

                        <h2 class="mb-4">Who We Are ?</h2>
                        <p>
                            We cover the entire IT spectrum, web applications to enterprise solutions. Our core services
                            include but are not limited to the following; Websites, Microsites, Mobile Application
                            Development & Solutions, Web based solutions, Enterprise Applications, Business Intelligence,
                            Quality Assurance Testing, IT consulting, Digital Marketing, Social Media Management / Products
                            and customized IT solutions. </p>

                        <h2 class="mb-4">Our Vision</h2>
                        <p>To establish unique products and solutions with enhanced features and greater capabilities that
                            are unmatched in the competitive market to get maximum Return on Investment to their customers.
                        </p>
                        <h2 class="mb-4">Our Mission</h2>
                        <p>Strong focus on delivering the best, consistently high quality and cost effective services and
                            solutions to cater to the needs of our clients.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
        <div class="container m-auto">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="18">0</strong>
                        </div>
                        <div class="text">
                            <span>Years of Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="120">0</strong>
                        </div>
                        <div class="text">
                            <span>projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="20">0</strong>
                        </div>
                        <div class="text">
                            <span>partners</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
