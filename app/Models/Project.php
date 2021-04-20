<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name', 'works'];

    public function projectImages()
    {
        return $this->hasMany('App\Models\ProjectImage', 'project_id');
    }
}
