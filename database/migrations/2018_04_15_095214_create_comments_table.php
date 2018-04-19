<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText("comment_text");
            $table->integer("user_id")->unsigned();
            $table->integer("post_id")->unsigned();
            $table->enum("post_type", ['BLOG', 'FORUM']);
            $table->boolean("comment_status")->default(1);
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
//            $table->foreign("blog_id")->references("id")->on("blogs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
