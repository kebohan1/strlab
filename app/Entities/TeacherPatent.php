<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherPatent extends Model{
    protected $table = 'teacher_patent';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','category','patent_number','start_date','end_date'
    ];
}