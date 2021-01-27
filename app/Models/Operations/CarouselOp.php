<?php

namespace App\Models\Operations;

use App\Models\Carousel;
use Intervention\Image\Facades\Image;

class CarouselOp extends Carousel
{
    public static function _fetchAll()
    {
        return Carousel::all();
    }

    public static function _fetchByID($id)
    {
        return Carousel::findOrFail($id);
    }

    public static function _store($request)
    {

        $carousel = $request->user()->carousels()->create($request->only(['title', 'paragraph']));
        self::uploadImage($request, $carousel);
        return true;

    }

    public static function _update($request, $id)
    {
        $carousel = self::_fetchById($id);
        $carousel->update($request->only(['title', 'paragraph']));
        self::uploadImage($request, $carousel);
        return true;
    }

    private static function uploadImage($request, $carousel)
    {
        if ($request->hasFile('slide_image')) {
            if (!empty($carousel->slide_image) && file_exists('storage/carousels/' . $carousel->slide_image)) {
                unlink('storage/carousels/' . $carousel->slide_image);
            }

            $image = $request->file('slide_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1905, 741)->save(public_path('storage/carousels/' . $filename));
            $carousel->slide_image = $filename;
            $carousel->save();
        }
    }

    public static function _delete($id)
    {
        $carousel = self::_fetchById($id);
        $carousel->delete();
        return true;
    }
}
