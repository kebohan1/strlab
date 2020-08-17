<?php

namespace App\Repositories;

use App\Entities\TeacherCounter;

class TeacherCOunterRepository {
    
    public function createWithOrder($name,$count,$order) {
        TeacherCounter::create(['name'=>$name,'count'=>$count,'order'=>$order]);
    }

    public function createWithoutOrder($name,$count){
        TeacherCounter::create(['name'=>$name,'count'=>$count]);
    }

    public function getAllCounter(){
        return TeacherCounter::all();
    }

    public function modifyCounter($id,$count){
        TeacherCounter::where('id','=',$id)->update(['count'=>$count]);
    }
}