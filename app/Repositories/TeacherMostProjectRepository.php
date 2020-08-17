<?php
namespace App\Repositories;
use App\Entities\TeacherMostProject;

class TeacherMostProjectRepository {
    public function create($name,$start_date,$end_date,$project_number,$job){
        TeacherMostProject::create([
            'name'=>$name,
            'project_number'=>$project_number,
            'job'=>$job,
            'start_date'=>$start_date,
            'end_date'=>$end_date
        ]);
    }

    public function read(){
        return TeacherMostProject::all();
    }

    public function modify($id,$name,$start_date,$end_date,$project_number,$job){
        TeacherMostProject::where('id','=',$id)->update([
            'name'=>$name,
            'project_number'=>$project_number,
            'job'=>$job,
            'start_date'=>$start_date,
            'end_date'=>$end_date
        ]);
    }

}