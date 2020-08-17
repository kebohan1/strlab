<?php
namespace App\Repositories;
use App\Entities\TeacherPatent;

class TeacherPatentRepository {
    public function create($name,$category,$patent_number,$start_date,$end_date){
        TeacherPatent::create([
            'name'=>$name,
            'category'=>$category,
            'patent_number'=>$patent_number,
            'start_date'=>$start_date,
            'end_date'=>$end_date
        ]);
    }

    public function read(){
        return TeacherPatent::all();
    }

    public function modify($id,$name,$category,$patent_number,$start_date,$end_date){
        TeacherPatent::where('id','=',$id)->update([
            'name'=>$name,
            'category'=>$category,
            'patent_number'=>$patent_number,
            'start_date'=>$start_date,
            'end_date'=>$end_date
        ]);
    }

}