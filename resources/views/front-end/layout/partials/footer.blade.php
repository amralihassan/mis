<footer class="footer" id="end">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5">
                <div class="row">
                    <div class="col-md-3 mb-md-0 mb-4">
                        <h2 class="footer-heading">About us</h2>
                        <p> We cover the entire IT spectrum, web applications to enterprise solutions.</p>
                        <p>Address : 417 Omar Ibn EL Khatab, 6th of October, Giza</p>

                        <p> <a href="tel://01270876060" class="text-secondary">Phone : +2 01270876060</a></p>
                        <ul class="ftco-footer-social p-0">

                            <li class="ftco-animate"><a
                                    href="https://www.facebook.com/Multi-Information-Systems-115024650315294"
                                    target="blank" data-toggle="tooltip" data-placement="top" title="Facebook"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" target="blank" data-toggle="tooltip"
                                    data-placement="top" title="linkedin"><span class="fa fa-linkedin"></span></a></li>
                            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Instagram"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-6">
                                        <h2 class="footer-heading">Solutions</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="{{route('network-solutions')}}" class="py-1 d-block">Network Solutions</a></li>

                                            <li><a href="{{route('software-solutions')}}" class="py-1 d-block">Software Solutions
                                                </a></li>

                                        </ul>
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-6">
                                        <h2 class="footer-heading">Discover</h2>
                                        <ul class="list-unstyled">
                                            <li><a href="{{route('about')}}" class="py-1 d-block">About us</a></li>
                                            <li><a href="{{route('contact')}}" class="py-1 d-block">Contact us</a></li>
                                            {{-- <li><a href="index.html" class="py-1 d-block">Terms &amp; Conditions</a> --}}
                                            {{-- </li> --}}
                                            {{-- <li><a href="project.html" class="py-1 d-block">Policies</a></li> --}}
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12 ml-5">
                        <p class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                <h2 class="footer-heading">Contact Us</h2>
                <form action="#" class="form-consultation">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">

                        <input list="service" id="servlist" name="servlist" placeholder="Solutions"
                            class="form-control" />

                        <datalist id="service">
                            <option value="Network Solutions">
                            <option value="Software Solutions">
                        </datalist>

                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control"
                            placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control submit px-3">Send A Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>



<div id="stop" class="scrollTop">
    <span><a href="">Top</a></span>
</div>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="{{asset('site/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('site/js/popper.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('site/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('site/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('site/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('site/js/google-map.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>

</body>

</html>
