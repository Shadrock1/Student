<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'birthday', 'group_id'];
    protected $dates = ['birthday'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public  function subjects()
    {
        return $this->belongsToMany(Student::class, 'marks')->withPivot('mark');
    }


}
