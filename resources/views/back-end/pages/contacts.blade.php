@extends('back-end.layouts.app')

@section('title', 'Contacts')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Contacts'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Solution</th>
                                <th>Notes</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($contacts as $index => $contact)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td><span class="font-weight-bold">{{ $contact->first_name }}</span> {{ $contact->last_name }}</td>
                                <td>{{ $contact->mobile }}</td>
                                <td>{{ $contact->email }} <br> {{ $contact->country }}</td>
                                <td>{{ $contact->solutions->solution_name }}</td>
                                <td>{{ $contact->notes }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" id="deleteForm">
                                        @csrf
                                        @method('DELETE')

                                        @if (authInfo()->isAbleTo('delete-contact'))
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

    <!-- apexcharts -->
    <script src="{{ asset('cPanel/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('cPanel/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>

    @include("back-end.layouts.partials.dataTable")
@endsection
