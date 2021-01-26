@extends('front-end.layout.app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Service Name <span class="m_1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error dignissimos
                    quo nemo eius.</span></h1>
        </div>
    </div>

    <div id="service" class="section wb" style="background: rgb(248, 248, 248)">
        <div class="container">

            <div class="row dev-list text-center" data-aos='zoom-in' data-aos-duration='1000'>
                <div class="col-12 wow " data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix row">

                        <div class="col-md-6 col-sm-12" data-aos='fade-right' data-aos-duration='1500'
                            data-aos-delay='1050'>
                            <div class="widget-title">
                                <h3>Shared Hosting</h3>
                                <small>Starting from $40/month</small>
                            </div>
                            <!-- end title -->
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione at eveniet rem, esse quasi
                                fugit excepturi quod modi vitae inventore tempore magnam facere ipsum laborum sequi qui eum!
                                Cupiditate laboriosam repellat corrupti molestias, placeat sequi porro, nihil possimus
                                aspernatur doloribus libero voluptatem. Necessitatibus enim sint sapiente tempore magni illo
                                cum.</p>



                            <a href="#pricing" data-scroll class="btn btn-light grd1 effect-1 btn-radius btn-brd">Order
                                Now</a>

                        </div>
                        <div class="col-md-6 col-sm-12" data-aos='fade-left' data-aos-duration='1500' data-aos-delay='2550'>
                            <img src="{{ asset('site/uploads/hosting_01.jpg') }} " alt="" class="img-responsive">

                        </div>

                    </div>
                    <!--widget -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end section -->
@endsection
