@extends('back-end.layouts.app')
@section('title', 'Slideshow')
@section('content')
    @include("back-end.layouts.partials.page-title",
    ['pagetitle'=>'Dashoard','title'=>'Slideshow'])

    @if (authInfo()->isAbleTo('add-carousel'))
        <div class="mb-2">
            <a class="btn btn-success" href="{{ route('carousels.create') }}"><i class="fa fa-plus"></i> New Slideshow</a>
        </div>
    @endif
    <div class="row">
    @forelse ($carousels as $carousel)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body" style="min-height:250px">
                    <h4 class="card-title mt-0">
                        {!!$carousel->title!!}
                        <form action="{{route('carousels.destroy',$carousel->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-warning mt-2" href="{{route('carousels.edit',$carousel->id)}}"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-danger mt-2" type="submit"><i class="fa fa-trash"></i></button>
                        </form>

                    </h4>
                    <p class="card-text">{!!$carousel->paragraph!!}</p>
                    <p class="card-text">
                        <small class="text-muted">{{$carousel->updated_at}}</small>
                    </p>
                </div>
                <img class="card-img-bottom img-fluid" src="{{ asset('storage/carousels/' . $carousel->slide_image) }}"
                    alt="Card image cap">
            </div>
        </div>

        @empty
        <div class="col-md-12">
            <div class="alert alert-info">
                <strong>No carousels found!</strong>
            </div>
        </div>
        @endforelse
    </div>
@endsection
