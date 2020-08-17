<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherSkill extends Model{
    protected $table = 'teacher_skill';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content','order'
    ];
}