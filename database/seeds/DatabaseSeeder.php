<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $user = App\User::create([
            'name' => 'test',
            'username' => 'test',
            'password' => Hash::make('test'),
        ]);
    }
}
