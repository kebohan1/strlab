<?php
namespace App\Repositories;
use App\Entities\TeacherArticle;

class TeacherArticleRepository {
    public function create($authors,$title,$journal_or_conference,$time,$type,$citation_index){
        TeacherArticle::create([
            'authors'=>$authors,
            'title'=>$title,
            'journal_or_conference'=>$journal_or_conference,
            'time'=>$time,
            'type'=>$type,
            'citation_index'=>$citation_index
        ]);
    }

    public function read(){
        return TeacherArticle::all();
    }

    public function modify($id,$authors,$title,$journal_or_conference,$time,$type,$citation_index){
        TeacherArticle::where('id','=',$id)->update([
            'authors'=>$authors,
            'title'=>$title,
            'journal_or_conference'=>$journal_or_conference,
            'time'=>$time,
            'type'=>$type,
            'citation_index'=>$citation_index
        ]);
    }

}