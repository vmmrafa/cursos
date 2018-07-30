<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable = [
        'id', 'courses_id', 'avatar','name'
    ];

    public function course() {
        return $this->hasOne('App\Course');
    }
}
