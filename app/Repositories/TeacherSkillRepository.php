<?php
namespace App\Repositories;
use App\Entities\TeacherSkill;

class TeacherSkillRepository {
    public function create($content){
        TeacherSkill::create([
            'content'=>$content
        ]);
    }

    public function read(){
        return TeacherSkill::all();
    }

    public function modify($id,$content,$order){
        TeacherSkill::where('id','=',$id)->update([
            'content'=>$content,
            'order'=>$order
        ]);
    }

    public function cleanTable(){
        TeacherSkill::truncate();
    }

}