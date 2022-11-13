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
        Schema::create('allblogs', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('user_id');
            $table->string('name');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->dateTime('published_date');
            $table->string('blog_img');
            $table->string('banner_img');
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
        Schema::dropIfExists('allblogs');
    }
};
