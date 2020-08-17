<?php
namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TeacherCounter extends Model{
    protected $table = 'teacher_counter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','count','order'
    ];
}