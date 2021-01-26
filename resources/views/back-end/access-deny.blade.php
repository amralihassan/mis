<!doctype html>
<html lang="en">

    <head>

        @include("back-end.layouts.partials.title-meta")

        @include("back-end.layouts.partials.head-css")

    </head>

    <body>
        @section('title','Access Denied')


        <div class="my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center my-5">
                            <h1 class="font-weight-bold text-error">4 <span class="error-text">0<img src="{{asset('cPanel/assets/images/error-img.png')}}" alt="" class="error-img"></span> 3</h1>
                            <h3 class="text-uppercase">Sorry, access denied</h3>
                            <div class="mt-5 text-center">
                                <a class="btn btn-primary waves-effect waves-light" href="{{route('home')}}">Back to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include("back-end.layouts.partials.vendor-scripts")

        <script src="assets/js/app.js"></script>

    </body>
</html>
