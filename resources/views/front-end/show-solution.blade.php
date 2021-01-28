@extends('front-end.layout.app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>{{ $solution->solution_name }} <span class="m_1"></span></h1>
        </div>
    </div>

    <div id="service" class="section wb" style="background: rgb(248, 248, 248)">
        <div class="container">

            <div class="row  text-justify" data-aos='zoom-in' data-aos-duration='1000'>
                <div class="col-12 wow " data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix row">

                        <div class="col-md-6 col-sm-12" data-aos='fade-right' data-aos-duration='1500'
                            data-aos-delay='1050'>
                            <div class="widget-title text-center">
                                <h3>{{ $solution->solution_name }}</h3>
                                <small>{{ $solution->abstract }}</small>
                            </div>
                            <!-- end title -->
                            <p>{!! $solution->description !!}</p>
                        </div>
                        <div class="col-md-6 col-sm-12" data-aos='fade-left' data-aos-duration='1500' data-aos-delay='2550'>
                            <img src="{{ asset('storage/solutions/' . $solution->solution_image) }} " alt="" class="img-responsive">
                        </div>
                    </div>
                    <!--widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end section -->
@endsection
