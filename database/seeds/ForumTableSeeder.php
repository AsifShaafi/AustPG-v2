<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("forums")->insert(
            [
                'id' => 1,
                'author_id' => 2,
                'question' => 'This is the first question',
                'body' => 'Body of the first question',
                'views' => 0,
                'slug' => '921523847840/the+first+forum',
                'status' => 'APPROVED',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );

        DB::table("forums")->insert(
            [
                'id' => 2,
                'author_id' => 2,
                'question' => '10 Kids Unaware of Their Halloween Costume',
                'body' => 'It\'s one thing to subject yourself to a Halloween costume mishap because, hey, that\'s your prerogative.Today, we\'re looking at three particularly interesting stories. Pinterest added a new location-based feature on Wednesday that uses Place Pins as a way to map out vacations and favorite areas. Southwest Airlines is providing Wi-Fi access from gate to gate for $8 per day through an onboard hotspot. And in an effort to ramp up its user base, Google Wallet is offering a debit card that can take out cash from.',
                'views' => 225,
                'slug' => '921523847840/the+second+forum',
                'status' => 'APPROVED',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("forums")->insert(
            [
                'id' => 3,
                'author_id' => 2,
                'question' => 'This is the third question',
                'body' => 'Body of the third question',
                'views' => 0,
                'slug' => '921523847840/the+third+forum',
                'status' => 'PENDING',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );
        DB::table("forums")->insert(
            [
                'id' => 4,
                'author_id' => 2,
                'question' => '10 Kids Unaware of Their Halloween Costume',
                'body' => 'It\'s one thing to subject yourself to a Halloween costume mishap because, hey, that\'s your prerogative.Today, we\'re looking at three particularly interesting stories. Pinterest added a new location-based feature on Wednesday that uses Place Pins as a way to map out vacations and favorite areas. Southwest Airlines is providing Wi-Fi access from gate to gate for $8 per day through an onboard hotspot. And in an effort to ramp up its user base, Google Wallet is offering a debit card that can take out cash from.',
                'views' => 0,
                'slug' => '921523847840/the+fourth+forum',
                'status' => 'PENDING',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );

        DB::table("forums")->insert(
            [
                'id' => 5,
                'author_id' => 2,
                'question' => 'This is the fifth question',
                'body' => 'Body of the fifth question',
                'views' => 0,
                'slug' => '921523847840/the+fifth+forum',
                'status' => 'INAPPROPRIATE',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );
    }
}
