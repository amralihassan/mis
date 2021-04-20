<!DOCTYPE html>
<html lang="en">

<head>
    <title>MIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('site/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
</head>

<body>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-wrap">
                        <div class="row">
                            <div class="col-md-10 d-flex align-items-center">
                                <p class="mb-0 phone pl-md-1 text-nowrap">
                                    <a href="net.html" class="  font-weight-bold"> System integration Services</a>
                                    <a href="soft.html" class=" font-weight-bold"> &amp; Software Solutions </a>
                                </p>
                            </div>
                            <div class="col-md-2 d-flex justify-content-md-end">
                                <div class="social-media">
                                    <p class="mb-0 d-flex text-info">
                                        <a href="{{app('settings')->facebook}}"
                                            target="blank"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook "><i class="sr-only ">Facebook</i></span></a>

                                        <a href="{{app('settings')->linked_in}}"
                                            class="d-flex align-items-center text-info justify-content-center"><span
                                                class="fa "><i class="fab fa-linkedin "></i></span></a>

                                        <a href="{{app('settings')->instagram}}" class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

                                        <a href="{{app('settings')->youtube}}" class="d-flex align-items-center justify-content-center"><span
                                                class="fa "><i class="fab fa-youtube"></i></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start nav -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <div>
                <a class="navbar-brand text-danger text-center w-50" href="{{route('home')}}"><img src="{{asset('site/images/logo (1).png')}}"
                        style="width: 30%;"><span class="text-danger"
                        style="font-size: smaller; font-weight: bolder;">Multi Information Systems</span> </a>
            </div>
            <button class="navbar-toggler float-left " type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-nowrap" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Solutions
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('network-solutions')}}">Network Solutions</a>
                            <a class="dropdown-item" href="{{route('software-solutions')}}">Software Solutions</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>
                    <li class="nav-item"><a href="{{route('projects')}}" class="nav-link">Projects</a></li>

                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
