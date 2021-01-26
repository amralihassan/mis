@extends('back-end.layouts.app')
@section('title', 'Profile')
@section('content')
@include("back-end.layouts.partials.page-title",
['pagetitle'=>'Dashoard','title'=>'Profile'])

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate method="POST" action="{{route('profile.update',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('back-end.users._form')

                    <hr>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button type="button" class="btn btn-light" onclick="location.href='{{route('home')}}';">
                        <i class="ft-x"></i> Cancel
                    </button>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div>
@endsection

@section('script')
<script src="{{asset('cPanel/assets/libs/parsleyjs/parsley.min.js')}}"></script>
<script src="{{asset('cPanel/assets/js/pages/form-validation.init.js')}}"></script>
@endsection
