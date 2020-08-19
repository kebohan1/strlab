<?php
namespace App\Repositories;
use App\Entities\TeacherEducation;

class TeacherEducationRepository {
    public function create($university,$department,$degree){
        TeacherEducation::create([
            'university'=>$university,
            'department'=>$department,
            'degree'=>$degree
        ]);
    }

    public function read(){
        return TeacherEducation::all();
    }

    public function modify($id,$university,$department,$degree){
        TeacherEducation::where('id','=',$id)->update([
            'university'=>$university,
            'department'=>$department,
            'degree'=>$degree
        ]);
    }

    public function cleanTable(){
        TeacherEducation::truncate();
    }
}