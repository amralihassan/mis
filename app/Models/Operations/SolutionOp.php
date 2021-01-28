<?php

namespace App\Models\Operations;

use App\Models\Solution;
use Intervention\Image\Facades\Image;

class SolutionOp extends Solution
{
    public static function _fetchAll()
    {
        return Solution::sort()->paginate(5);
    }

    public static function _fetchById($id)
    {
        return Solution::findOrFail($id);
    }

    public static function _store($request)
    {
        $solution = $request->user()->solutions()->create($request->only([
            'type', 'solution_name', 'abstract', 'description', 'sort',
        ]));
        self::uploadImage($request, $solution);
        return true;
    }

    private static function uploadImage($request, $solutions)
    {
        if ($request->hasFile('solution_image')) {
            if (!empty($solutions->solution_image) && file_exists('storage/solutions/' . $solutions->solution_image)) {
                unlink('storage/solutions/' . $solutions->solution_image);
            }

            $image = $request->file('solution_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(800, 650)->save(public_path('storage/solutions/' . $filename));
            $solutions->solution_image = $filename;
            $solutions->save();
        }
    }

    public static function _update($request, $id)
    {
        $solution = self::_fetchById($id);
        $solution->update($request->only([
            'type', 'solution_name', 'abstract', 'description', 'sort',
        ]));
        self::uploadImage($request, $solution);
        return true;
    }

    public static function _delete($id)
    {
        $solution = self::_fetchById($id);
        $solution->delete();
        return true;
    }

    public static function softwares()
    {
        return Solution::sort()->software()->get();
    }

    public static function networks()
    {
        return Solution::sort()->network()->get();
    }

    public static function _networkCount()
    {
        return Solution::network()->count();
    }

    public static function _softwareCount()
    {
        return Solution::software()->count();
    }
}
