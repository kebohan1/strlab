<?php

use Illuminate\Database\Seeder;
use App\Services\Teacher\BasicInfoInformationService;

class InitDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $teacherBasicInfomationInit = collect([
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

    }
}
