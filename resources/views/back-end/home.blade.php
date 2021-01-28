@extends('back-end.layouts.app')
@section('title', 'Dashboard | Admin panel')
@section('content')
@include("back-end.layouts.partials.page-title",
['pagetitle'=>'Dashoard','title'=>'Dashboard'])

<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card bg-info">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="fa fa-users text-white font-size-24"></i>
              </div>
              <div class="media-body text-white text-right">
                <h3 class="text-white">{{$users}}</h3>
                <span>Users</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card bg-danger">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class=" fas fa-envelope-open-text text-white font-size-24"></i>
              </div>
              <div class="media-body text-white text-right">
                <h3 class="text-white">{{$contacts}}</h3>
                <span>Contacts</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card bg-success">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="fas fa-ethernet text-white font-size-24"></i>
              </div>
              <div class="media-body text-white text-right">
                <h3 class="text-white">{{$networks}}</h3>
                <span>Networks Solutions</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
      <div class="card bg-warning">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div class="align-self-center">
                <i class="fab fa-stack-overflow text-white font-size-24"></i>
              </div>
              <div class="media-body text-white text-right">
                <h3 class="text-white">{{$softwares}}</h3>
                <span>Software Solutions</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
