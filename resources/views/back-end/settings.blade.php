@extends('back-end.layouts.app')
@section('title', 'Settings')
@section('content')
@include("back-end.layouts.partials.page-title",
['pagetitle'=>'Dashoard','title'=>'Settings'])

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <!-- print all errors -->
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <form class="needs-validation" novalidate method="POST" action="{{route('update.settings')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="website_name">Website Name</label>
                            <input type="text" id="website_name" class="form-control" name="website_name" placeholder="website_name"
                                value="{{ old('website_name', settings()->website_name) }}" required>
                            @error('website_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" id="website" class="form-control" name="website" placeholder="website"
                                    value="{{ old('website', settings()->website) }}" required>
                                @error('website')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="email"
                                    value="{{ old('email', settings()->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" name="address" placeholder="address"
                                    value="{{ old('address', settings()->address) }}" required>
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="number" id="contact" class="form-control" name="contact" placeholder="contact"
                                    value="{{ old('contact', settings()->contact) }}" required>
                                @error('contact')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook">Facrbook</label>
                                <input type="text" id="facebook" class="form-control" name="facebook" placeholder="facebook"
                                    value="{{ old('facebook', settings()->facebook) }}" required>
                                @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="youtube">Yuotube</label>
                                <input type="text" id="youtube" class="form-control" name="youtube" placeholder="youtube"
                                    value="{{ old('youtube', settings()->youtube) }}" required>
                                @error('youtube')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linked_in">Linkedin</label>
                                <input type="text" id="linked_in" class="form-control" name="linked_in" placeholder="Linkedin"
                                    value="{{ old('linked_in', settings()->linked_in) }}" >
                                @error('linked_in')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" id="instagram" class="form-control" name="instagram" placeholder="instagram"
                                    value="{{ old('instagram', settings()->instagram) }}" >
                                @error('instagram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="owner">Owner</label>
                                <input type="text" id="owner" class="form-control" name="owner" placeholder="owner"
                                    value="{{ old('owner', settings()->owner) }}" required>
                                @error('owner')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="keywords">Keywords</label>
                                <input type="text" id="keywords" class="form-control" name="keywords" placeholder="keywords"
                                    value="{{ old('keywords', settings()->keywords) }}" required>
                                @error('keywords')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="description">Description</label>

                            <textarea class="form-control" name="description" id="description" required cols="30" rows="10">{{ old('description', settings()->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="msg_maintenance">Message Maintenance</label>

                            <textarea class="form-control" name="msg_maintenance" id="msg_maintenance" required cols="30" rows="10">{{ old('msg_maintenance', settings()->msg_maintenance) }}</textarea>
                            @error('msg_maintenance')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="validationCustom02">Icon</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="icon">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="validationCustom02">Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="logo">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">Update</button>
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
