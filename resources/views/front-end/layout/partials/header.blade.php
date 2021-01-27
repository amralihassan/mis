<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>{{settings()->website_name}}</title>
    <meta name="keywords" content="{{settings()->keywords}}">
    <meta name="description" content="{{settings()->description}}">
    <meta name="author" content="{{settings()->author}}">

        <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('site/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('site/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{asset('site/css/colors.css')}}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{asset('site/css/versions.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('site/css/custom.css')}}">

    <!-- Modernizer for Portfolio -->
    <script src="{{asset('site/js/modernizer.js')}}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">
    <!-- LOADER -->
    <div id="preloader">
        <div class="loading">
            <div class="finger finger-1">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-2">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-3">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-4">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="last-finger">
                <div class="last-finger-item"><i></i></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img
                            src="{{ asset(settings()->logo_image) }}" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="{{request()->segment(1) == 'home' ? 'active':''}}" href="{{ route('home') }}">Home</a></li>
                        <li><a class="{{request()->segment(1) == 'solutions' ? 'active':''}}" href="{{ route('solutions') }}">Solutions</a></li>
                        <li><a class="{{request()->segment(1) == 'projects' ? 'active':''}}" href="{{ route('projects') }}">Projects</a></li>
                        <li><a class="{{request()->segment(1) == 'contact' ? 'active':''}}" href="{{ route('contact') }}">Contact</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
