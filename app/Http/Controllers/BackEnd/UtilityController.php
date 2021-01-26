<?php
namespace App\Http\Controllers\BackEnd;

use App\Models\Operations\UserOp;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\Operations\SettingOp;
use App\Http\Requests\SettingRequest;

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

    public function settings()
    {
        return view('back-end.settings');
    }

    public function updateSettings(SettingRequest $request)
    {
        SettingOp::updateSetting($request);
        toastr()->success('Settings updated successfully');
        return redirect()->back();
    }
}
