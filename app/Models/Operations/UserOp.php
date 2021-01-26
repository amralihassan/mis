<?php

namespace App\Models\Operations;

use App\Models\User;
use Intervention\Image\Facades\Image;

class UserOp extends User
{
    public static function _fetchAll()
    {
        return User::orderBy('id', 'desc')->paginate(10);
    }

    public static function _fetchById($id)
    {
        return User::findOrFail($id);
    }

    public static function _store($request)
    {
        $user = User::create(([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]));
        self::updateImage($request, $user);
        return true;
    }

    public static function _update($request, $id)
    {
        $user = self::_fetchById($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        self::updateImage($request, $user);
        return true;
    }

    public static function _delete($id)
    {
        $user = self::_fetchById($id);
        $user->delete();
        return true;
    }

    private static function updateImage($request, $user)
    {
        if ($request->hasFile('image_profile')) {

            if (!empty($user->image_profile) && file_exists('storage/users/' . $user->image_profile)) {
                unlink('storage/users/' . $user->image_profile);
            }

            $image = $request->file('image_profile');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(46, 46)->save(public_path('storage/users/' . $filename));
            $user->image_profile = $filename;
            $user->save();
        }
    }
}
