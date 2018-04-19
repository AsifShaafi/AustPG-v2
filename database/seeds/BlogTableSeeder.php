<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blogs")->insert(
            [
                'id' => 1,
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'the first blog post',
                'body' => 'this is the first blog post.<br><p><br></p>',
                'slug' => '921523847840/the+first+blog+post',
                'status' => 'DRAFT',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );

        DB::table("blogs")->insert(
            [
                'id' => 2,
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'This is the second blog',
                'body' => 'Hi guys, this is the <u><b>second blog</b></u> post I <span style="background-color: rgb(255, 255, 0);">posted</span>!! <br><p><br></p>',
                'slug' => '521523851440/This+is+the+second+blog',
                'status' => 'PUBLISHED',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );

        DB::table("blogs")->insert(
            [
                'id' => 3,
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'the third blog post',
                'body' => 'this is the third blog post.<br><p><br></p>',
                'slug' => '921523847840/the+third+blog+post',
                'status' => 'DRAFT',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );

        DB::table("blogs")->insert(
            [
                'id' => 4,
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'This is the fourth blog',
                'body' => 'Hi guys, this is the <u><b>fourth blog</b></u> post I <span style="background-color: rgb(255, 255, 0);">posted</span>!! <br><p><br></p>',
                'slug' => '521523851440/This+is+the+fourth+blog',
                'status' => 'PUBLISHED',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );

        DB::table("blogs")->insert(
            [
                'id' => 5,
                'author_id' => 2,
                'category_id' => 1,
                'title' => 'This is the fifth blog',
                'body' => 'Hi guys, this is the <u><b>fifth blog</b></u> post I <span style="background-color: rgb(255, 255, 0);">posted</span>!! <br><p><br></p>',
                'slug' => '521523851440/This+is+the+fifth+blog',
                'status' => 'PUBLISHED',
                "created_at" => now(),
                'updated_at' => now(),
            ]
        );
    }
}
