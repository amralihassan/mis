@extends('back-end.layouts.app')
@section('title', 'About')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'About'])

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <!-- print all errors -->
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form class="needs-validation" novalidate method="POST" action="{{ route('update.company.data') }}">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="about">About</label>

                                <textarea class="form-control" name="about" id="about" required cols="30"
                                    rows="10">{{ old('about', $company->about) }}</textarea>
                                @error('about')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="mission">Mission</label>

                                <textarea class="form-control" name="mission" id="mission" required cols="30"
                                    rows="10">{{ old('mission', $company->mission) }}</textarea>
                                @error('mission')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="vision">Vision</label>

                                <textarea class="form-control" name="vision" id="vision" required cols="30"
                                    rows="10">{{ old('vision', $company->vision) }}</textarea>
                                @error('vision')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="customers">Customers</label>
                                    <input type="text" id="customers" class="form-control" name="customers"
                                        placeholder="customers" value="{{ old('customers', $company->customers) }}"
                                        required>
                                    @error('customers')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="projects">Projects</label>
                                    <input type="text" id="projects" class="form-control" name="projects"
                                        placeholder="projects" value="{{ old('projects', $company->projects) }}" required>
                                    @error('projects')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="partners">Partners</label>
                                    <input type="text" id="partners" class="form-control" name="partners"
                                        placeholder="partners" value="{{ old('partners', $company->partners) }}" required>
                                    @error('partners')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <hr>
                        <button class="btn btn-primary" type="submit">Update</button>
                        <button type="button" class="btn btn-light" onclick="location.href='{{ route('home') }}';">
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
    <script src="{{ asset('cPanel/assets/libs/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('cPanel/assets/js/pages/form-validation.init.js') }}"></script>
@endsection
