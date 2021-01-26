<?php
if (!function_exists('adminAuth')) {
    function adminAuth()
    {
        return auth()->guard('web');
    }
}

if (!function_exists('authInfo')) {
    function authInfo()
    {
        if (adminAuth()->check()) {
            $id = adminAuth()->user()->id;
            $userInfo = \App\Models\User::where('id', $id)->first();
            return $userInfo;
        }
    }
}
