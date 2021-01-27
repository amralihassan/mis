<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolutionRequest;
use App\Models\Operations\SolutionOp;
use App\Models\Solution;

class SolutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-solutions', ['only' => ['index', 'show']]);
        $this->middleware('permission:add-solution', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-solution', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-solution', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = SolutionOp::_fetchAll();
        return view('back-end.pages.solutions.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solution = new Solution();
        return view('back-end.pages.solutions.create', compact('solution'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionRequest $request)
    {
        SolutionOp::_store($request);
        toastr()->success('Saved successfully');
        return redirect()->route('solutions.index');
    }

    public function show($id)
    {
        $solution = SolutionOp::_fetchById($id);
        return view('back-end.pages.solutions.show', compact('solution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solution = SolutionOp::_fetchById($id);
        return view('back-end.pages.solutions.edit', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolutionRequest $request, $id)
    {
        SolutionOp::_update($request, $id);
        toastr()->success('Saved successfully');
        return redirect()->route('solutions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = SolutionOp::_delete($id);
        if ($status) {
            toastr()->success('Deleted successfully');
            return redirect()->route('solutions.index');
        }
    }
}
