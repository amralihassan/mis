<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Operations\RoleOp;
use App\Models\Operations\UserOp;
use App\Models\User;

class UserController extends Controller
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
        $users = UserOp::_fetchAll();
        $roles = RoleOp::_fetchAll();
        return view('back-end.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $roles = RoleOp::_fetchAll();
        $active = true;
        return view('back-end.users.create', compact('user', 'active', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        UserOp::_store($request);
        toastr()->success('Saved successfully');
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserOp::_fetchById($id);
        $roles = RoleOp::_fetchAll();
        $active = false;
        return view('back-end.users.edit', compact('user', 'active', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        UserOp::_update($request, $id);
        toastr()->success('Saved successfully');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = UserOp::_delete($id);
        if ($status) {
            toastr()->success('Deleted successfully');
            return redirect()->route('users.index');
        }

    }

    public function updatePassword()
    {
        return view('back-end.update-password');
    }

    public function savePassword()
    {
        UserOp::updatePassword();
        toastr()->success('Updated password successfully');
        return redirect()->route('dashboard');
    }

}
