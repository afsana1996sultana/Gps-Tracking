<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('title');
            $table->string('mission_title');
            $table->string('vission_title');
            $table->longText('detail');
            $table->longText('mission_detail');
            $table->longText('vission_detail');
            $table->string('img');
            $table->string('icon_img1');
            $table->string('icon_img2');
            $table->string('icon_img3');
            $table->string('about_video_url');
            $table->softDeletes();
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
        Schema::dropIfExists('abouts');
    }
};
