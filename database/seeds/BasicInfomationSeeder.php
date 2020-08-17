<?php

use Illuminate\Database\Seeder;
use App\Services\Teacher\BasicInfomationService;


class BasicInfomationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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

    }
}
