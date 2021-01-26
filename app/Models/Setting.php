<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'website_name',
        'logo',
        'icon',
        'website',
        'email',
        'address',
        'contact',
        'facebook',
        'youtube',
        'keywords',
        'owner',
        'description',
        'msg_maintenance',
    ];

    public function getLogoImageAttribute()
    {
        if (!empty($this->logo)) {
            return 'storage/web-settings/' . settings()->logo;
        } else {
            return 'app-assets/web-images/logo/logo.png';
        }
    }

    public function getIconImageAttribute()
    {
        if (!empty($this->icon)) {
            return 'storage/settings/' . settings()->icon;
        } else {
            return 'storage/settings/icon.ico';
        }
    }
}
