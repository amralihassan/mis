@extends('back-end.layouts.app')
@section('title', 'Update Password')
@section('content')
@include("back-end.layouts.partials.page-title",
['pagetitle'=>'Dashoard','title'=>'Update Password'])

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('save-password')}}" method="post">
                    @csrf
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="New Password">
                        </div>
                        <input type="submit" value="Update password" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
