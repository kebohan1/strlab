<?php

namespace App\Services\Teacher;

use App\Repositories\TeacherArticleRepository;
use App\Repositories\TeacherBasicInfomationRepository;
use App\Repositories\TeacherCounterRepository;
use App\Repositories\TeacherSkillRepository;
use App\Repositories\TeacherEducationRepository;
use App\Repositories\TeacherExperienceRepository;
use App\Repositories\TeacherMostProjectRepository;
use App\Repositories\TeacherPatentRepository;
use Exception;

class BasicInfomationService
{

    function __construct()
    {
        $tBIRepo = new TeacherBasicInfomationRepository;
    }

    public function update($type, $value)
    {
        $tBIRepo = new TeacherBasicInfomationRepository;
        $tBIRepo->modify($type, $value);
    }

    public function read()
    {
        $tBIRepo = new TeacherBasicInfomationRepository;
        $tSkillRepo = new TeacherSkillRepository;
        $tEduRepo = new TeacherEducationRepository;
        $tExpRepo = new TeacherExperienceRepository;
        $tCountRepo = new TeacherCounterRepository;
        $tArticleRepo = new TeacherArticleRepository;
        $tMostRepo = new TeacherMostProjectRepository;

        $result = [
            'basic_info' => $tBIRepo->read(),
            'skill' => $tSkillRepo->read(),
            'educations' => $tEduRepo->read(),
            'experiences' => $tExpRepo->read(),
            'counter' => $tCountRepo->getAllCounter(),
            'articles' => $tArticleRepo->readArticle(),
            'most_projects' => $tMostRepo->read(),
            'proceedings' => $tArticleRepo->readProceeding(),
        ];

        return $result;
    }

    public function create($list)
    {
        $tBIRepo = new TeacherBasicInfomationRepository;

        foreach ($list as $item) {
            $tBIRepo->create($item['type'], $item['value']);
        }
    }

    public function updateSkill($skills)
    {
        $tSkillRepo = new TeacherSkillRepository;

        //Initial Skill
        $tSkillRepo->cleanTable();

        //Update Now Skill
        foreach ($skills as $skill) {
            try {
                $tSkillRepo->create($skill['skill']);
            } catch (Exception $e) {
                return [
                    'message' => $e->getMessage(),
                    'code' => 400
                ];
            }
        }
        return [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function updateEducation($educations)
    {
        $tEduRepo = new TeacherEducationRepository;

        //Initial Education
        $tEduRepo->cleanTable();

        //Update Now Education
        foreach ($educations as $education) {
            try {
                $tEduRepo->create($education['university'], $education['department'], $education['degree']);
            } catch (Exception $e) {
                return [
                    'message' => $e->getMessage(),
                    'code' => 400
                ];
            }
        }
        return [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function createExperience($department, $job)
    {
        $tExpRepo = new TeacherExperienceRepository;

        //create one Experience
        try {
            $tExpRepo->create($department, $job);
        } catch (Exception $e) {
            return [
                'message' => $e->getMessage(),
                'code' => 400
            ];
        }

        return [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function modify($id, $department, $job)
    {
        $tExpRepo = new TeacherExperienceRepository;

        //modify Experience
        try {
            $tExpRepo->modify($id, $department, $job, 0);
        } catch (Exception $e) {
        }
    }

    public function createCounter($name, $count)
    {
        $tCountRepo = new TeacherCounterRepository;

        //create Counter
        try {
            $tCountRepo->createWithoutOrder($name, $count);
        } catch (Exception $e) {
            return [
                'message' => $e->getMessage(),
                'code' => 400
            ];
        }

        return [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function createArticle($author, $title, $journal, $time, $citation_index)
    {
        $tArticleRepo = new TeacherArticleRepository;

        //create Article
        try {
            $tArticleRepo->create($author, $title, $journal, $time, 1, $citation_index);
        } catch (Exception $e) {
            return [
                'message' => $e->getMessage(),
                'code' => 400
            ];
        }

        return  [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function createProceeding($author, $title, $journal, $time, $citation_index)
    {
        $tArticleRepo = new TeacherArticleRepository;

        //create Article
        try {
            $tArticleRepo->create($author, $title, $journal, $time, 2, $citation_index);
        } catch (Exception $e) {
            return [
                'message' => $e->getMessage(),
                'code' => 400
            ];
        }

        return  [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function createMostProject($name, $start_date, $end_date, $project_number, $job)
    {
        $tMostRepo = new TeacherMostProjectRepository;

        //create MostProject
        try {
            $tMostRepo->create($name, $start_date, $end_date, $project_number, $job);
        } catch (Exception $e) {
            return [
                'message' => $e->getMessage(),
                'code' => 400
            ];
        }

        return  [
            'message' => 'Complete',
            'code' => 200
        ];
    }

    public function createPatent($name,$category,$patent_number,$start_date,$end_date){
        $tPatentRepo = new TeacherPatentRepository;
        
        //create Article
        try {
            $tPatentRepo->create($name,$category,$patent_number,$start_date,$end_date);
        } catch (Exception $e) {
            return [
                'message' => $e->getMessage(),
                'code' => 400
            ];
        }

        return  [
            'message' => 'Complete',
            'code' => 200
        ];
    }


}
