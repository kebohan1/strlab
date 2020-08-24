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

    public function setExperience($expers){
        $str = '';
        $index = 1;
        foreach($expers as $exper){
            $str .= '<tr><td>'.$index.'</td><td><input class="form-control experience_department" type="text" value="'.$exper->department.'"/></td>'
                    .'<td><input class="form-control experience_job" type="text" value="'.$exper->job.'"/></td>'
                    .'<td><button class="btn btn-success experience_update_btn"><i class="fas fa-sync-alt"></i> 更新</button>  '
                    .'<button class="btn btn-danger experience_delete_btn"><i class="fas fa-trash"></i> 刪除</button></td></tr>';
            $index++;
        }

        return $str;
    }

    public function setCounter($counters){
        $str = '';
        $index = 1;
        foreach($counters as $counter){
            $str .= '<tr><td>'.$index.'</td><td><input class="form-control experience_department" type="text" value="'.$counter->name.'"/></td>'
                    .'<td><input class="form-control experience_job" type="number" value="'.$counter->count.'"/></td>'
                    .'<td><button class="btn btn-success experience_update_btn"><i class="fas fa-sync-alt"></i> 更新</button>  '
                    .'<button class="btn btn-danger experience_delete_btn"><i class="fas fa-trash"></i> 刪除</button></td></tr>';
        }
        return $str;
    }
}