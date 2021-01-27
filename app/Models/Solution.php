<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['type', 'solution_name', 'abstract', 'description', 'solution_image', 'sort'];

    public function scopeSort($q)
    {
        return $q->orderBy('type', 'desc')->orderBy('sort', 'asc');
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('M d Y, D h:i a');
    }

    public function scopeSoftware($q)
    {
        return $q->where('type', 'software');
    }

    public function scopeNetwork($q)
    {
        return $q->where('type', 'network');
    }
}
