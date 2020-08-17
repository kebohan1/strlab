<?php
namespace App\Repositories;
use App\Entities\TeacherBasicInfomation;

class TeacherBasicInfomationRepository {
    public function create($type,$value){
        TeacherBasicInfomation::create([
            'type'=>$type,
            'value'=>$value
        ]);
    }

    public function read(){
        return TeacherBasicInfomation::all();
    }

    public function modify($type,$value){
        TeacherBasicInfomation::where('type','=',$type)->update([
            'value'=>$value
        ]);
    }

}