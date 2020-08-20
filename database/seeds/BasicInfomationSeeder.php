<?php

use Illuminate\Database\Seeder;
use App\Services\Teacher\BasicInfomationService;
use App\Entities\TeacherEducation;

class BasicInfomationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $teacherBasicInfomationInit = collect();
        $teacherBasicInfomationInit->push([
            'type'=>'phone',
            'value'=>''
        ],[
            'type'=>'office',
            'value'=>''
        ],[
            'type'=>'email',
            'value'=>''
        ],[
            'type'=>'photo',
            'value'=>''
        ]);
        $basicInfoService = new BasicInfomationService;

        $basicInfoService->create($teacherBasicInfomationInit);
        // TeacherEducation::create([
        //     'university'=>'國立交通大學',
        //     'department'=>'電子研究所',
        //     'degree'=>'博士'
        // ]);
    }
}
