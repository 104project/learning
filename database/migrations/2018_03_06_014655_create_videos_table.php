<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id'); //影片編號
            $table->string('title',30); //影片標題
            $table->string('category',20); //影片分類
            $table->string('author',20); //作者
            $table->string('video_id', 40); //youtube影片ID
            $table->string('views_num'); //觀看次數
            $table->string('likes_num'); //喜愛次數
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
