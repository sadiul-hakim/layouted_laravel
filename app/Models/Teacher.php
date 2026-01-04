<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    public function getNameAttribute(string $value){
        return ucfirst($value);
    }

    public function setNameAttribute(string $value){
        $this->attributes['name'] = ucfirst($value);
    }
}
