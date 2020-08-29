<?php
namespace App\Repositories;
use App\Entities\TeacherExperience;

class TeacherExperienceRepository {
    public function create($department,$job){
        TeacherExperience::create([
            'department'=>$department,
            'job'=>$job,
        ]);
    }

    public function read(){
        return TeacherExperience::all();
    }

    public function modify($id,$department,$job){
        TeacherExperience::where('id','=',$id)->update([
            'department'=>$department,
            'job'=>$job
        ]);
    }

}