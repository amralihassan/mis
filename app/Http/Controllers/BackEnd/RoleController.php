<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Operations\PermissionOp;
use App\Models\Operations\RoleOp;
use App\Models\Operations\UserOp;
use App\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-roles', ['only' => ['index', 'show']]);
        $this->middleware('permission:add-role', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-role', ['only' => ['edit', 'update', 'addPermission']]);
        $this->middleware('permission:delete-role', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = RoleOp::_fetchAll();
        return view('back-end.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new Role();
        return view('back-end.roles.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = RoleOp::_store($request);
        toastr()->success('Saved successfully');
        return redirect()->route('roles.show', $role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = RoleOp::_fetchById($id);
        $users = UserOp::_fetchAll();
        return view('back-end.roles.show', compact('role', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = RoleOp::_fetchById($id);
        return view('back-end.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        RoleOp::_update($request, $id);
        toastr()->success('Updated successfully');
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = RoleOp::_destroy($id);
        if ($status) {
            toastr()->success('Deleted successfully');
            return redirect()->route('roles.index');
        }
    }

    public function addPermission()
    {
        PermissionOp::addPermissions(request()->all());
        toastr()->success('Updated permissions successfully');
        return redirect()->back();

    }
}
