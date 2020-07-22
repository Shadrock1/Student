<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['mark'];

    public function student()
    {
        return $this->hasMany('Model\Student');
    }
    public function subject()
    {
        return $this->hasMany('Model\Subject');
    }
}
