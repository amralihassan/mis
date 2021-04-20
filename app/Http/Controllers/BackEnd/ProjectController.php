<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Operations\ProjectOp;
use App\Http\Requests\ProjectRequest;
use App\Models\Operations\ProjectImageOp;
use App\Http\Requests\ProjectImageRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-projects', ['only' => ['index', 'show']]);
        $this->middleware('permission:add-projects', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-projects', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete-projects', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ProjectOp::_fetchAll();
        return view('back-end.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        return view('back-end.pages.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        ProjectOp::_store($request);
        toastr()->success('Saved successfully');
        return redirect()->route('projects.index');
    }

    public function show($id)
    {
        $project = ProjectOp::_fetchById($id);
        return view('back-end.pages.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = ProjectOp::_fetchById($id);
        return view('back-end.pages.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        ProjectOp::_update($request, $id);
        toastr()->success('Saved successfully');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = ProjectOp::_delete($id);
        if ($status) {
            toastr()->success('Deleted successfully');
            return redirect()->route('projects.index');
        }
    }

    public function uploadProjectImage(ProjectImageRequest $request)
    {

        ProjectImageOp::_store($request);
        toastr()->success('Saved successfully');
        return redirect()->route('projects.show',$request->project_id);
    }

    public function deleteProjectImage($image_id)
    {
        ProjectImageOp::_delete($image_id);
        toastr()->success('Removed Image successfully');
        return redirect()->back();
    }
}
