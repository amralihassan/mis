@extends('back-end.layouts.app')
@section('title', 'Roles')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Roles'])
    @if (authInfo()->isAbleTo('add-role'))
        <div class="mb-2">
            <a class="btn btn-success" href="{{ route('roles.create') }}"><i class="fa fa-plus"></i> New Role</a>
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
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Show</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($roles as $index => $role)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    @if (authInfo()->isAbleTo('view-roles'))
                                        <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}"><i
                                                class="fa fa-eye"></i> Show Permissions</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post" id="deleteForm">
                                        @if (authInfo()->isAbleTo('edit-role'))
                                            <a class="btn btn-warning" href="{{ route('roles.edit', $role->id) }}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        @endif
                                        @csrf
                                        @method('DELETE')
                                        @if (authInfo()->isAbleTo('delete-role'))
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
    <script>
        $('#deleteForm').submit(function() {
            confirm("Are you sure you want to delete this role?");
        })

    </script>
    <!-- apexcharts -->
    <script src="{{ asset('cPanel/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    @include("back-end.layouts.partials.dataTable")
@endsection
