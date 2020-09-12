<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    //
    protected $fillable = 
    [
        'subject', 'teacher', 'schedule',
    ];
    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }
}
