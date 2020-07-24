<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name'];


    public function student()
    {
        return $this->belongsToMany(Student::class, 'marks')->withPivot('mark');
    }
}
