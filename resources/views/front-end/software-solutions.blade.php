@extends('front-end.layout.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset("site/images/software.jpg")}}');"
        data-stellar-background-ratio="0.5">
        <div class=""></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Software <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">Software</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">

            <div class="col-md-12 heading-section text-center ftco-animate">

                <h2>Software Solutions</h2>
            </div>
            <div class="row d-flex mt-3">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('client')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/client.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('client')}}">Client Relation Managemen (CRM)</a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('client')}}"> is an approach to managing a company's
                                    interaction with current and potential customers. </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate ">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('pms')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/project.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('pms')}}">Project Management System (PMS)</a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('pms')}}">Is the practice of initiating, planning,
                                    executing, controlling, and closing the work of a team to achieve specific goals. </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('fms')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/fin.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('fms')}}">Financial Management System (FMS) </a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('fms')}}">is specifically build for the financial
                                    organization to maintain multiple business accounts </a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('elearn')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/learning.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('elearn')}}">E learning System </a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('elearn')}}">Easily Embed Interactive Voice, Video &
                                    Streaming. Inlcudes All Tools Neeeded. Connect Teachers with Students Worldwide for
                                    Interactive Online Learning</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('ems')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/learn.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('ems')}}">Education Management System (EMS)</a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('ems')}}">works so well because it was designed for
                                    teachers. It brings your entire school community together. </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('mms')}}" class="block-20 rounded"
                            style="background-image: url('{{asset("site/images/med.jpg")}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="{{route('mms')}}">Medical Management Syste (MMS)</a></div>

                            </div>
                            <h3 class="heading"><a href="{{route('mms')}}">is a modern solution that enables medical
                                    facilities to overcome the biggestchallenges in healthcaredelivery today</a></h3>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


@endsection
