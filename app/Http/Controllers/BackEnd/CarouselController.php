<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use App\Models\Operations\CarouselOp;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-users', ['only' => ['index', 'show']]);
        $this->middleware('permission:add-user', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-user', ['only' => ['edit', 'update', 'addPermission']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = CarouselOp::_fetchAll();
        return view('back-end.pages.carousels.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carousel = new Carousel();
        return view('back-end.pages.carousels.create', compact('carousel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        CarouselOp::_store($request);
        toastr()->success('Saved successfully');
        return redirect()->route('carousels.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = CarouselOp::_fetchById($id);
        return view('back-end.pages.carousels.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CarouselOp::_update($request, $id);
        toastr()->success('Saved successfully');
        return redirect()->route('carousels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = CarouselOp::_delete($id);
        if ($status) {
            toastr()->success('Deleted successfully');
            return redirect()->route('carousels.index');
        }
    }
}
