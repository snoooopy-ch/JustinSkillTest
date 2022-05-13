<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function guardians() {
        $this->hasMany(Guardian::class);
    }
}