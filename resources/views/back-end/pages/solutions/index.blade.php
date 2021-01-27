@extends('back-end.layouts.app')
@section('title', 'Solutions')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Solutions'])

    @if (authInfo()->isAbleTo('add-solution'))
        <div class="mb-2">
            <a class="btn btn-success" href="{{ route('solutions.create') }}"><i class="fa fa-plus"></i> New Solution</a>
        </div>
    @endif

    @forelse ($solutions as $solution)
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-4">
                            <img class="card-img img-fluid" src="{{ asset('storage/solutions/' . $solution->solution_image) }}"
                                alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $solution->solution_name }} {{ $solution->abstract }}</h5>
                                <p class="card-text">{!!$solution->description!!}</p>
                                <p class="card-text"><small class="text-muted">{{ $solution->updated_at }}</small></p>
                                <form action="{{route('solutions.destroy',$solution->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-warning mt-2" href="{{route('solutions.edit',$solution->id)}}"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-danger mt-2" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <div class="alert alert-info">
                <strong>No solutions found!</strong>
            </div>
        </div>
    @endforelse

    {{$solutions->links()}}

@endsection
