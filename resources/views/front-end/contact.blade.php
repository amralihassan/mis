@extends('front-end.layout.app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Contact<span class="m_1"></span></h1>
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
                        <form id="contactform" class="row" action="{{route('contacts.store')}}" name="contactform" method="post">
                            @csrf
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Last Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="mobile" id="phone" class="form-control"
                                        placeholder="Your Mobile" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Solution</label>
                                    <select name="solution_id" id="solution_id" class="selectpicker form-control"
                                        data-style="btn-white" required>
                                        <option value="12">Select Solution</option>
                                        @foreach ($solutions as $solution)
                                            <option value="{{$solution->id}}">{{$solution->type}} : {{$solution->solution_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label class="sr-only">Select Country</label>
                                    <select name="country" id="country" class="selectpicker form-control"
                                        data-style="btn-white" required>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="notes" id="notes" rows="6"
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
