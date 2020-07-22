<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'birthday'];

    public function group()
    {
        return $this->hasOne('Model\Group');
    }
    public function mark()
    {
        return $this->belongsTo('Model\Mark');
    }
}
