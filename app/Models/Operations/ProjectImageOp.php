<?php

namespace App\Models\Operations;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class ProjectImageOp extends Model
{
    public static function _store($request)
    {
        $project = ProjectImage::create(['project_id' => $request->project_id]);
        self::uploadImage($request, $project);
    }

    private static function uploadImage($request, $project)
    {
        if ($request->hasFile('file_name')) {
            if (!empty($project->file_name) && file_exists('storage/projects/' . $project->file_name)) {
                unlink('storage/projects/' . $project->file_name);
            }

            $image = $request->file('file_name');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 800)->save(public_path('storage/projects/' . $filename));
            $project->file_name = $filename;
            $project->save();
        }
    }

    public static function _delete($image_id)
    {
        $project_image = ProjectImage::findOrFail($image_id);
        if (!empty($project_image->file_name) && file_exists('storage/projects/' . $project_image->file_name)) {
            unlink('storage/projects/' . $project_image->file_name);
        }
        $project_image->delete();
    }
}
