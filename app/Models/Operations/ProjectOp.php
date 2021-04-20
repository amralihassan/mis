<?php

namespace App\Models\Operations;

use App\Models\Project;

class ProjectOp extends Project
{
    public static function _fetchAll()
    {
        return Project::with('projectImages')->get();
    }

    public static function _fetchById($id)
    {
        return Project::with('projectImages')->where('id', $id)->firstOrFail();
    }

    public static function _store($request)
    {
        return Project::create($request->only(['project_name', 'works']));
    }

    public static function _update($request, $id)
    {
        $project = self::_fetchById($id);
        $project->update($request->only(['project_name', 'works']));
        return true;
    }

    public static function _delete($id)
    {
        $project = self::_fetchById($id);
        $project->delete();
        return true;
    }
}
