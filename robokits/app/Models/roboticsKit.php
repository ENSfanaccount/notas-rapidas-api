<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roboticsKit extends Model
{
    public function courses()
    {
    return $this->hasMany(Course::class);
    }

}
