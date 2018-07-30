<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Address;
use App\Models\Consultant;

class Course extends Model
{
    
    public function consultant(): HasOne
    {
        //relação de um para um
        return $this->hasOne('App\Consultante');
    }
    
    public function address(): HasOne
    {
        //relação de um para um
        return $this->hasOne('App\Address');
    }
    
}
