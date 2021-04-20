<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $table_name = "project_images";
    protected $fillable = ['project_id', 'file_name'];
}
