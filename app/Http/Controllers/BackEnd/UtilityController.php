<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Operations\UserOp;

class UtilityController extends Controller
{
    public function profile()
    {
        $user = authInfo();
        $active = false;
        return view('back-end.profile', compact('user', 'active'));
    }

    public function updateProfile(UserRequest $request, $id)
    {
        UserOp::_update($request, $id);
        toastr()->success('Updated successfully');
        return redirect()->route('profile');
    }

    public function accessDeny()
    {
        return view('back-end.access-deny');
    }
}
