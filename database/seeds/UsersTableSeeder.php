<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert(
            [
                "id" => 1,
                "name" => "Tester user",
                "email" => "test@test.com",
                "student_id" => "15-01-01-011",
                "password" => '$2y$10$lS5NibU2oklsM2uyroLqxOFzqJlsrjVOrGnYSeBMAbZUp56DUpMiW',
                "phone" => "+8801521495544",
                "status" => 1
            ]
        );

        DB::table("users")->insert(
            [
                "id" => 2,
                "name" => "Asif",
                "email" => "s@s.com",
                "student_id" => "15-01-01-136",
                "password" => '$2y$10$lS5NibU2oklsM2uyroLqxOFzqJlsrjVOrGnYSeBMAbZUp56DUpMiW',
                "phone" => "+8801521495544",
                "status" => 1
            ]
        );
    }
}
