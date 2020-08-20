<?php

namespace App\Services\Teacher;

use App\Repositories\TeacherBasicInfomationRepository;
use App\Repositories\TeacherSkillRepository;
use App\Repositories\TeacherEducationRepository;
use Exception;

class BasicInfomationService {

    function __construct(){
        $tBIRepo = new TeacherBasicInfomationRepository;
    }

    public function update($type,$value){
        $tBIRepo = new TeacherBasicInfomationRepository;
        $tBIRepo->modify($type,$value);
    }

    public function read(){
        $tBIRepo = new TeacherBasicInfomationRepository;
        $tSkillRepo = new TeacherSkillRepository;
        $tEduRepo = new TeacherEducationRepository;

        $result = [
            'basic_info'=>$tBIRepo->read(),
            'skill'=>$tSkillRepo->read(),
            'educations'=>$tEduRepo->read()
        ];

        return $result;
    }

    public function create($list){
        $tBIRepo = new TeacherBasicInfomationRepository;

        foreach($list as $item){
            $tBIRepo->create($item['type'],$item['value']);
        }
    }

    public function updateSkill($skills){
        $tSkillRepo = new TeacherSkillRepository;
        
        //Initial Skill
        $tSkillRepo->cleanTable();

        //Update Now Skill
        foreach($skills as $skill){
            try{
                $tSkillRepo->create($skill['skill']);
            } catch(Exception $e){
                return [
                    'message'=>$e->getMessage(),
                    'code'=>400
                ];
            }
            
        }
        return [
            'message'=>'Complete',
            'code'=>200
        ] ;
    }

    public function updateEducation($educations){
        $tEduRepo = new TeacherEducationRepository;

        //Initial Education
        $tEduRepo->cleanTable();

        //Update Now Education
        foreach($educations as $education){
            try{
                $tEduRepo->create($education['university'],$education['department'],$education['degree']);
            } catch(Exception $e) {
                return [
                    'message'=>$e->getMessage(),
                    'code'=>400
                ];
            }
            
        }
        return [
            'message'=>'Complete',
            'code'=>200
        ] ;
    }

}