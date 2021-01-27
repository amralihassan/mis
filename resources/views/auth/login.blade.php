<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('cPanel/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('cPanel/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('cPanel/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('cPanel/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <style>
            body, html {
            height: 100%;
            }

            .bg {
            /* The image used */
            background-image: url("storage/web-settings/login2.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>

    <body class="auth-body-bg">
        <div class="home-btn d-none d-sm-block">
            <a href="{{url('/')}}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>
        <div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="/" class="logo"><img src="{{ asset(settings()->logo_image) }}" height="20" alt="logo"></a>
                                                </div>

                                                <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                                <p class="text-muted">Sign in to continue to Nazox.</p>
                                            </div>

                                            <div class="p-2 mt-5">
                                                <form class="form-horizontal" action="{{ route('login') }}" method="POST" >
                                                    @csrf
                                                    <div class="form-group auth-form-group-custom mb-4">
                                                        <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                        <label for="email">email</label>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter username">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                        <label for="userpassword">Password</label>
                                                        <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" required autocomplete="current-password"
                                                         placeholder="Enter password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customControlInline"
                                                        name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>



        <!-- JAVASCRIPT -->
        <script src="{{asset('cPanel/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('cPanel/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('cPanel/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('cPanel/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('cPanel/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('cPanel/assets/js/app.js')}}"></script>

    </body>
</html>
