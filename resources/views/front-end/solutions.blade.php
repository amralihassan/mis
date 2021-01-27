@extends('front-end.layout.app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>solutions<span class="m_1"></span></h1>
        </div>
    </div>

    <div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
                <p class="lead">Get the red carpet treatment <strong>just $39 per month!</strong> It is estimated that 3.5
                    million established by personal blogs.<br> From each other, we share paid WordPress themes WP Service...
                </p>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="pricing-table pricing-table-highlighted">
                                <div class="pricing-table-header grd1">
                                    <h2>Software Solutions</h2>
                                </div>
                                <div class="pricing-table-space"></div>
                                <div class="pricing-table-features">
                                    @forelse ($softwares as $software)
                                        <p><i class="fa fa-check"></i><strong>
                                                <a href="{{route('show.solutions',$software->id)}}">{{ $software->solution_name }} {{ $software->abstract }}</a>
                                            </strong></p>
                                    @empty
                                        <p><i class="fa fa-check"></i><strong>We do not have software solutions</strong></p>
                                    @endforelse
                                </div>
                                <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll
                                        class="btn btn-light btn-radius btn-brd grd1 effect-1">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pricing-table pricing-table-highlighted">
                                <div class="pricing-table-header grd1">
                                    <h2>Network Solutions</h2>
                                </div>
                                <div class="pricing-table-space"></div>

                                <div class="pricing-table-features">
                                    @forelse ($networks as $network)
                                        <p><i class="fa fa-check"></i><strong>
                                                <a href="{{route('show.solutions',$network->id)}}">{{ $network->solution_name }} {{ $network->abstract }}</a>
                                            </strong></p>
                                    @empty
                                        <p><i class="fa fa-check"></i><strong>We do not have network solutions.</strong></p>
                                    @endforelse
                                    {{-- <p><i class="fa fa-check"></i><strong>Servers and
                                            Storage</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Network Security</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Wi-Fi Coverage Solutions</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Internet Building System</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Network Infrastructure</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Voip Solutions</strong></p>
                                    <p><i class="fa fa-check"></i><strong>MATV / SMATV</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Smart Surveillance</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Public Address System</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Access Control</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Fire Alarm System</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Queuing System</strong></p>
                                    <p><i class="fa fa-check"></i><strong>Maintenance & Support</strong></p>
                                    --}}
                                </div>
                                <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll
                                        class="btn btn-light btn-radius btn-brd grd1 effect-1">More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection
