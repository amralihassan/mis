@extends('front-end.layout.app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Contact<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
        </div>
    </div>

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please fill out
                    the form below. <br>We have million of website owners who happy to work with us!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="" name="contactform" method="post">
                            @csrf
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Solution</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control"
                                        data-style="btn-white">
                                        <option value="12">Select Solution</option>
                                        <option value="Web Design">Network: Servers and Storage</option>
                                        <option value="Web Design">Network: Network Security</option>
                                        <option value="Web Design">Network: Wi-Fi Coverage Solutions</option>
                                        <option value="Web Design">Network: Internet Building System</option>
                                        <option value="Web Design">Network: Network Infrastructure</option>
                                        <option value="Web Design">Network: Voip Solutions</option>
                                        <option value="Web Design">Network: MATV / SMATV</option>
                                        <option value="Web Design">Network: Smart Surveillance</option>
                                        <option value="Web Design">Network: Public Address System</option>
                                        <option value="Web Design">Network: Access Control</option>
                                        <option value="Web Design">Network: Fire Alarm System</option>
                                        <option value="Web Design">Network: Queuing System</option>
                                        <option value="Web Design">Network: Maintenance & Support</option>
                                        <option value="Web Design">Software: Project Management System (PMS)</option>
                                        <option value="Web Design">Software: Client Relation Management (CRM)</option>
                                        <option value="Web Design">Software: Employee Management System (EMS)</option>
                                        <option value="Web Design">Software: Financial Management System (FMS)</option>
                                        <option value="Web Design">Software: School Management System (SMS)</option>
                                        <option value="Web Design">Software: Learning Management System (LMS)</option>
                                        <option value="Web Design">Software: Medical Management System (MMS)</option>
                                        <option value="Web Design">Software: GYM Management System (GMS)</option>
                                        <option value="Web Design">Software: E-Commerce</option>

                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Country</label>
                                    <select name="select_price" id="select_price" class="selectpicker form-control"
                                        data-style="btn-white">
                                        <option value="egypt">Egypt</option>
                                        <option value="saudi_arabia">Saudi Arabia</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6"
                                        placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
