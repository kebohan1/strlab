<?php

namespace App\Services\Teacher;

use App\Repositories\TeacherBasicInfomationRepository;

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
}