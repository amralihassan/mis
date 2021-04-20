@extends('front-end.layout.app')
@section('content')
    <!-- start slide show ....................................... -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('site/images/software.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Software Solution <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">E LEARNING SYSTEM</h1>
                </div>
            </div>
        </div>
    </section>
    <!--end slid show .....................................-->

    <section class="ftco-section ftco-no-pt bg-light mt-5 ">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url({{asset('site/images/eee.jpeg')}});">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5 ftco-animate">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">E learning SYSTEM
                        </span>

                    </div>
                    <div class="services-2 w-100 d-flex">

                        <div class="text pl-4">
                            <p class="lead">The E-Learning facility is an online system that allows students and staff to
                                communicate effectively. Students can access it from their homes as well as on campus. It
                                allows students continuously to follow up on their studies.</p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
@endsection
