<!doctype html>
<html lang="en">

<head>

    @include("back-end.layouts.partials.title-meta")
    <!-- jquery.vectormap css -->
    <link href="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('cPanel/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('cPanel/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    @yield('style')
    @include("back-end.layouts.partials.head-css")
    @toastr_css

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include("back-end.layouts.partials.top-bar")

        @include("back-end.layouts.partials.sidebar")

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">



                    @yield('content')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include("back-end.layouts.partials.footer")

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    @include("back-end.layouts.partials.vendor-scripts")
    @yield('script')
    <script src="{{ asset('cPanel/assets/js/app.js') }}"></script>

</body>

@toastr_js
@toastr_render

</html>
