<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Http\Requests\UserRequest;
use App\Models\Operations\SettingOp;
use App\Models\Operations\UserOp;

class UtilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view-settings', ['only' => ['settings']]);
        $this->middleware('permission:update-settings', ['only' => ['updateSettings']]);
    }

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

    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect()->route('home');
    }
}
