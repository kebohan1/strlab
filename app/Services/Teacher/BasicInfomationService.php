<?php

namespace App\Services\Teacher;

use App\Repositories\TeacherBasicInfomationRepository;
use App\Repositories\TeacherSkillRepository;
use App\Repositories\TeacherEducationRepository;

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
        return $tBIRepo->read();
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
            $tSkillRepo->create($skill['content']);
        }
        return response(200);
    }

    public function updateEducation($educations){
        $tEduRepo = new TeacherEducationRepository;

        //Initial Education
        $tEduRepo->cleanTable();

        //Update Now Education
        foreach($educations as $education){
            $tEduRepo->create($education['university'],$education['department'],$education['degree']);
        }
        return response(200);
    }

}