@extends('front-end.layout.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('site/images/cables.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class=""></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Network <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Network Solutions</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">

            <div class="col-md-12 heading-section text-center ftco-animate">

                <h2>Network Solutions</h2>
            </div>
            <div class="row d-flex mt-3">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('infra')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/server.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('infra')}}">Network infrastructure
                                    </a>
                                </div>

                            </div>
                            <h3 class="heading"><a href="{{route('infra')}}"> MIS helps you adopt the most suitable IT
                                    solutions for your busines</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate ">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('smart')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/hikvision-smart-solution-2-0-cctv-software.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('smart')}}">Smart Surveillance
                                    </a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('smart')}}">Mis provides analogue, IP and hybrid CCTV
                                    systems that are cost-effective.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('access')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/Accesscard_900.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('access')}}">Access Control </a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('access')}}">access control is the selective
                                    restriction of access to a place while access management describes the process. </a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('time')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/dedect.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('time')}}"> Time Attendance &amp; Face Detection </a></div>


                            </div>
                            <h3 class="heading"><a href="{{route('time')}}"> Centralized working hours control several
                                    locations Working hours control of each individual employee </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('voip')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/voip.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('voip')}}">VOIP Solutions
                                    </a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('voip')}}"> providing the best quality of service to
                                    our clients, and use high end brands for projects.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('fire')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/alarm.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('fire')}}">Fire Alarm System
                                    </a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('fire')}}">Fire Alarm System is designed to alert us
                                    to an emergency so that we can take action to protect ourselves</a></h3>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


@endsection
