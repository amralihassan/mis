@extends('back-end.layouts.app')
@section('title', 'Create Project')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Create Project'])

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $project->project_name }}</h4>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate method="POST" action="{{ route('image.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="project_id" value="{{ $project->id }}">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="validationCustom02">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile"
                                    accept="image" name="file_name">
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                            <button type="button" class="btn btn-light"
                                onclick="location.href='{{ route('projects.index') }}';">
                                <i class="ft-x"></i> Back
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @forelse ($project->projectImages as $image)
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <img class="project-image" src="{{ asset('storage/projects/' . $image->file_name) }}"
                                        alt="Image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <form action="{{ route('image.delete', $image->id) }}" method="post" id="deleteForm">
                                        @csrf
                                        @method('DELETE')

                                        @if (authInfo()->isAbleTo('delete-projects'))
                                            <button type="submit" class="btn btn-danger float-right"><i class="fa fa-trash"></i>
                                                Remove</button>
                                        @endif
                                    </form>
                                </div>
                        </div>
                    @empty
                    <h6>No Images Founded</h6>
                    @endforelse

                </div>
            </div>
        </div>
    </div>

@endsection
