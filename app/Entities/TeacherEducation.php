<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherEducation extends Model{
    protected $table = 'teacher_education';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'university','department','degree','order'
    ];
}