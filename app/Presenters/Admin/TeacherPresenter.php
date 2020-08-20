<?php

namespace App\Presenters\Admin;

class TeacherPresenter {
    public function setSkill($skills){
        $str = '';
        foreach($skills as $skill){
            $str .= '<tr class="teacher_skill_item"><td><input class="form-control teacher_skill_item_input" type="text" value="'.$skill->content.'"/></td>'
                    .'<td><button class="btn btn-danger delete_teacher_skill"><i class="fa fa-trash"></i></button></td>';
        }

        return $str;
    }

    public function setEducation($educations){
        $str = '';
        foreach($educations as $education){
            $str .= '<tr class="teacher_education_item"><td><input class="form-control education_university" type="text" value="'.$education->university.'"/></td>'
                    .'<td><input class="form-control education_department" type="text" value="'.$education->department.'"/></td>'
                    .'<td><input class="form-control education_degree" type="text" value="'.$education->degree.'"/></td>'
                    .'<td><button class="btn btn-danger delete_teacher_education"><i class="fa fa-trash"></i></button></td>';
        }

        return $str;
    }
}