<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherMostProject extends Model{
    protected $table = 'teacher_most_project';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','start_date','end_date','project_number','job'
    ];
}