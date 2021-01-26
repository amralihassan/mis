<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <img src="{{asset('site/images/logos/logo-hosting-light.png')}}" alt="">
                        <small>{{settings()->website_name}}</small>
                    </div>
                    <p> {{settings()->description}}</p>

                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information Link</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:#">{{settings()->email}}</a></li>
                        <li><a href="#">{{settings()->website}}</a></li>
                        <li>{{settings()->address}}</li>
                        <li>{{settings()->contact}}</li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Social</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="{{settings()->facebook}}"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="{{settings()->youtube}}"><i class="fa fa-youtube"></i> Youtube</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">HostCloud</a> Design By : <a href="https://html.design/">html design</a></p>
            </div>

            <div class="footer-right">
                <form method="get" action="#">
                    <input placeholder="Subscribe our newsletter.." name="search">
                    <i class="fa fa-envelope-o"></i>
                </form>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{asset('site/js/all.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('site/js/custom.js')}}"></script>
<!-- AOS Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
