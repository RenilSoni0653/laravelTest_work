<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'id' => 6,
                'user_id' => 1,
                'username' => 'SonalSoni',
                'age' => 21,
                'gender' => 'Female',
                'phone' => 7874321041,
            ],
            [
                'id' => 7,
                'user_id' => 2,
                'username' => 'ParagSoni',
                'age' => 44,
                'gender' => 'Male',
                'phone' => 9426312321,
            ]
        ]);
    }
}
