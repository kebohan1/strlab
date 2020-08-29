<?php

namespace App\Services\Teacher;

use App\Repositories\TeacherExperienceRepository;
use App\Repositories\TeacherMostProjectRepository;
use App\Repositories\TeacherCounterRepository;
use App\Repositories\TeacherArticleRepository;
use App\Repositories\TeacherPatentRepository;

use Exception;
class UpdateInfomationService {
    public function updateExperience($id,$new_department,$new_job){
        $tExperRepo = new TeacherExperienceRepository;
        try{
            $tExperRepo->modify($id,$new_department,$new_job);
        } catch(Exception $e){
            return [
                'message'=>$e->getMessage(),
                'code'=>400
            ];
        }

        return [
            'message'=>'Complete',
            'code'=>200
        ];
    }

    public function updateMostPorject($id,$name,$start_date,$end_date,$project_number,$job){
        $tMostRepo = new TeacherMostProjectRepository;
        try{
            $tMostRepo->modify($id,$name,$start_date,$end_date,$project_number,$job);
        } catch(Exception $e){
            return [
                'message'=>$e->getMessage(),
                'code'=>400
            ];
        }

        return [
            'message'=>'Complete',
            'code' =>200
        ];
    }

    public function updatePatent($id,$name,$category,$patent_number,$start_date,$end_date){
        $tPatentRepo = new TeacherPatentRepository;
        try{
            $tPatentRepo->modify($id,$name,$category,$patent_number,$start_date,$end_date);
        } catch(Exception $e){
            return [
                'message'=>$e->getMessage(),
                'code'=>400
            ];
        }

        return [
            'message'=>'Complete',
            'code' =>200
        ];
    }

    public function updateCounter($id,$count){
        $tCounterRepo = new TeacherCounterRepository;
        try{
            $tCounterRepo->modifyCounter($id,$count);
        } catch(Exception $e){
            return [
                'message'=>$e->getMessage(),
                'code'=>400
            ];
        }

        return [
            'message'=>'Complete',
            'code' =>200
        ];
    }

    public function updateArticle($id,$authors,$title,$journal_or_conference,$time,$citation_index){
        $tArticleRepo = new TeacherArticleRepository;
        try{
            $tArticleRepo->modify($id,$authors,$title,$journal_or_conference,$time,$citation_index);
        } catch(Exception $e){
            return [
                'message'=>$e->getMessage(),
                'code'=>400
            ];
        }

        return [
            'message'=>'Complete',
            'code' =>200
        ];
    }

}