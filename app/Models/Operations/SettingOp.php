<?php

namespace App\Models\Operations;

use App\Models\Setting;
use Intervention\Image\Facades\Image;

class SettingOp extends Setting
{
    public static function updateSetting($request)
    {
        $data = Setting::first();
        $data->update($request->except('_token', '_method', 'query_string', 'logo', 'icon'));
        if ($request->hasFile('logo')) {
            // remove old
            if (!empty($data->logo) && file_exists('storage/web-settings/' . $data->logo)) {
                unlink('storage/web-settings/' . $data->logo);
            }
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(186, 41)->save(public_path('storage/web-settings/' . $filename));
            $data->logo = $filename;
            $data->save();
        }

        if ($request->hasFile('icon')) {
            // remove old
            if (!empty($data->icons) && file_exists('storage/web-settings/' . $data->icon)) {
                unlink('storage/web-settings/' . $data->icon);
            }

            $image = $request->file('icon');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('storage/web-settings/' . $filename));
            $data->icon = $filename;
            $data->save();
        }

        return true;
    }
}
