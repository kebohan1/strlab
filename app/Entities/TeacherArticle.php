<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

class TeacherArticle extends Model{
    protected $table = 'teacher_articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'authors','title','journal_or_conference','time','type','citation_index'
    ];
}