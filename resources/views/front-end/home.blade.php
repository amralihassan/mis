@extends('front-end.layout.app')

@section('content')


    <!-- start slide show ....................................... -->
    <div class="">
        <div class="home-slider owl-carousel">
            <div class="slider-item " style="background-image:url({{asset('site/images/data_center-server-technology-748x421.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">

                                <h1 class="mb-4">the best IT Solutions support
                                </h1>
                                <p><a href="#end" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item "
                style="background-image:url({{asset('site/images/Server-Setup-Houston-TX-Houston-PC-Services1.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-8 ftco-animate">
                            <div class="text w-100 text-center">

                                <h1 class="mb-4">We Help You Businesses Innovate and Grow</h1>
                                <p><a href="#end" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--end slid show .....................................-->




    <section class="ftco-section ftco-no-pt bg-light mt-5">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url({{asset('site/images/aboutt.jpg')}});">
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="heading-section pl-md-4 pt-md-5">
                        <span class="subheading">Welcome to Agency</span>
                        <h2 class="mb-4">We Are the Best Network &amp; Software Agency</h2>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wealth"></span></div>
                        <div class="text pl-4">
                            <h4>Creative Idea Build Up</h4>
                            <p>Well-maintained hardware and software is necessary for every business and considering this
                                fact</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-accountant"></span></div>
                        <div class="text pl-4">
                            <h4> General Consultancy </h4>
                            <p>We are experienced and have a superior level of knowledge of IT infrastructure.</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-teamwork"></span></div>
                        <div class="text pl-4">
                            <h4>Best Solution for Information Technology</h4>
                            <p>Our skilled team is available for flexible maintenance contracts as per the size of your
                                company</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--typs.....................-->



    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row  justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2> Our Solutions</h2>
                </div>
            </div>
            <div class="row d-flex">

                <div class="col-md-6 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/network.jpg')}}">
                        <div class="overlay  text-center d-flex justify-content-center align-items-center ">
                            <p class="text-dark h-50 w-50 mt-5">Enterprise Networks, Security Data Centers Virtualization,
                                Project management, Business analysis &amp; business process design Managing all the tasks
                                of complex IT infrastructure </p>

                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{route('network-solutions')}}"><button type="button " class="btn btn-outline-danger mt-3">Network
                                Solutions</button></a>
                    </div>

                </div>

                <div class="col-md-6 d-flex flex-column ftco-animate">
                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/soft.jpg')}}">
                        <div class="overlay  text-center d-flex justify-content-center align-items-center">
                            <p class="text-dark h-50 w-50 ">Our services offered across multiple industry verticals
                                providing operational excellence, in domain and functional knowledge. </p>

                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{route('software-solutions')}}"><button type="button " class="btn btn-outline-danger mt-3">Software
                                Solutions</button></a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- end types-->


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


    <section class="ftco-section">
        <div class="container">



            <div class="row  justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2> Some Of Our Projects</h2>
                </div>
            </div>





            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('site/images/mis1.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/mis3.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/mis5.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.01 AM (2).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.01 AM (1).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.00 AM (11).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div class="text p-4">
                            <div class="meta mb-2">



                            </div>
                            <h3 class="heading"><a href="#">Network infrastructure
                                </a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('site/images/mis6.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/mis4.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/camraamis.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.00 AM (10).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.00 AM (8).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.00 AM (9).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="text p-4">
                            <div class="meta mb-2">



                            </div>
                            <h3 class="heading"><a href="#">SMART SURVEILLANCE</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <div id="carouselExample3" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active ">
                                    <img src="{{asset('site/images/projects/access3.jpeg')}}" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item ">
                                    <img src="{{asset('site/images/projects/access.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item ">
                                    <img src="{{asset('site/images/projects/WhatsApp Image 2021-03-31 at 10.51.00 AM (2).jpeg')}}"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/access1.jpeg')}}" class="d-block w-100" alt="...">
                                </div>



                            </div>
                            <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="text p-4">
                            <div class="meta mb-2">



                            </div>
                            <h3 class="heading"><a href="#">Access Control System</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <div id="carouselExample4" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('site/images/projects/fire2.jpeg')}}" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item ">
                                    <img src="{{asset('site/images/projects/fire1.jpeg')}}" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/fire3.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('site/images/projects/fire4.jpeg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item ">
                                    <img src="{{asset('site/images/projects/fire.jpeg')}}" class="d-block w-100" alt="...">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExample4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="text p-4">
                            <div class="meta mb-2">



                            </div>
                            <h3 class="heading"><a href="#">Fire Alarm System</a></h3>
                        </div>
                    </div>
                </div>






            </div>

        </div>
    </section>



    <!-- Testimonials_start -->
    <section class="ftco-section ">
        <div class="container">

            <div class="d-flex row justify-content-center mb-5 pb-3">
                <div class="col-md-2 heading-section text-center ftco-animate">
                    <h2 class="text-danger"> CEO</h2>
                </div>
            </div>
            <div class=" d-flex flex-column justify-content-center align-items-center mb-5 pb-3 text-center">
                <img src="{{asset('site/images/projects/weal.jpeg')}}" alt="Avatar" class="rounded-circle" style="width: 180px">
                <p class="lead mt-4"> Wael El Taweel </p>
                <p class="lead"> Multi Information Systems</p>
                <p class="lead">20 years experience in IT &amp; System integrator field</p>

            </div>



        </div>
    </section>
    <!-- Testimonials_end -->

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row  justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2> Our Partners</h2>
                </div>
            </div>
            <div class="row d-flex">

                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/Bosch-logo.jpg')}}">

                    </div>



                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/hikvision-logo.jpg')}}">

                    </div>



                </div>

                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/sam.jpg')}}">

                    </div>



                </div>

                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/Panasonic-logo.jpg')}}">

                    </div>



                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/CiscoLogo.jpg')}}">

                    </div>



                </div>

                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/aruba-hp.jpg')}}">

                    </div>



                </div>

                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/Logo_Legrand.jpg')}}">

                    </div>



                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate ">

                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/premium-Line-.jpg')}}">
                    </div>
                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate ">
                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/download.png')}}">
                    </div>
                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate ">
                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/CommScope-logo.jpg')}}">
                    </div>
                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate mt-3 mb-3 ">
                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/download (1).png')}}">
                    </div>
                </div>
                <div class="col-md-2 d-flex flex-column ftco-animate ">
                    <div class="myimg">
                        <img class="photo " src="{{asset('site/images/Cooper_Logo_Color_RGB_1.5e54321068458.png')}}">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
