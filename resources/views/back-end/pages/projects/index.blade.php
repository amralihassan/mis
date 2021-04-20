@extends('back-end.layouts.app')
@section('title', 'Projects')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Projects'])

    @if (authInfo()->isAbleTo('add-projects'))
        <div class="mb-2">
            <a class="btn btn-success" href="{{ route('projects.create') }}"><i class="fa fa-plus"></i> Add Project</a>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Works</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($projects as $index => $project)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->works }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('projects.show', $project->id) }}"><i
                                        class="fa fa-eye"></i> Show Images</a>
                                </td>
                                <td>
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="post" id="deleteForm">
                                        @if (authInfo()->isAbleTo('edit-projects'))
                                            <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        @endif

                                        @csrf
                                        @method('DELETE')

                                        @if (authInfo()->isAbleTo('delete-projects'))
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                                Trash</button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')

    @include("back-end.layouts.partials.dataTable")
@endsection
