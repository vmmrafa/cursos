<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = [
        'id', 'street', 'number','neighborhood', 'city', 'courses_id'
    ];

    public function course() {
        return $this->hasOne('App\Course');
    }
}
