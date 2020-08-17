<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherBasicInfomation extends Model{
    protected $table = 'teacher_basic_infomation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type','value'
    ];
}