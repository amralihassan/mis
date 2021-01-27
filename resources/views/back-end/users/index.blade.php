@extends('back-end.layouts.app')
@section('style')
<link href="{{asset('cPanel/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('title', 'Users')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Users'])
    @if (authInfo()->isAbleTo('add-user'))
        <div class="mb-2">
            <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fa fa-plus"></i> New User</a>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td><img src="{{ asset($user->profile_image) }}" alt="Image profile"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post" id="deleteForm">
                                        @if (authInfo()->isAbleTo('edit-user'))
                                            <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                        @endif

                                        @csrf
                                        @method('DELETE')

                                        @if (authInfo()->isAbleTo('delete-user'))
                                            <button id="sa-warning" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
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

    <!-- apexcharts -->
    <script src="{{ asset('cPanel/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('cPanel/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Sweet alert init js-->
    <script src="{{asset('cPanel/assets/js/pages/sweet-alerts.init.js')}}"></script>

    @include("back-end.layouts.partials.dataTable")
@endsection
