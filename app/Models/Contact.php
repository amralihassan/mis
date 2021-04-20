<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['full_name', 'email', 'mobile',  'subject', 'message'];

    public function solutions()
    {
        return $this->belongsTo('App\Models\Solution', 'solution_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('M d Y, D h:i a');
    }
}
