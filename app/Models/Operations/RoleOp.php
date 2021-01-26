<?php

namespace App\Models\Operations;


use App\Models\Role;

class RoleOp extends Role
{
    public static function _fetchAll()
    {
        return Role::all();
    }

    public static function _fetchById($id)
    {
        return Role::with('permissions')->where('id', $id)->firstOrFail();
    }

    public static function _store($request)
    {
        return Role::firstOrCreate($request->only('name', 'display_name', 'description'));
    }

    public static function _update($request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());
        return true;
    }

    public static function _destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return true;
    }
}
