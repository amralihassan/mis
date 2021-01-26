@extends('back-end.layouts.app')
@section('title', 'Display Permissions')
@section('content')
@include("back-end.layouts.partials.page-title",
['pagetitle'=>'Dashoard','title'=>'Display Permissions'])
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h3>{{$role->display_name}}</h3>
                        <hr>
                        <form action="{{ route('add.permission') }}" method="POST">
                            @csrf

                            <input type="hidden" name="role_id" value="{{ $role->id }}">

                            @include('back-end.roles.permissions.tree')
                            <hr>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Update
                                </button>
                                <button type="button" class="btn btn-light mr-1"
                                    onclick="location.href='{{ route('roles.index') }}';">
                                    <i class="ft-x"></i> Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
