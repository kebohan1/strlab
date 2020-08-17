<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherExperience extends Model{
    protected $table = 'teacher_experience';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'department','job','order'
    ];
}