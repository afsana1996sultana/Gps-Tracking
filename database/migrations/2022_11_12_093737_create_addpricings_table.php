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
        Schema::create('addpricings', function (Blueprint $table) {
            $table->bigIncrements('id')->primary;
            $table->string('title');
            $table->string('price');
            $table->string('renew');
            $table->string('design');
            $table->string('information');
            $table->string('form');
            $table->string('loading');
            $table->string('media');
            $table->string('update');
            $table->string('slider');
            $table->string('page');
            $table->string('sample');
            $table->string('affordable');
            $table->string('security');
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
        Schema::dropIfExists('addpricings');
    }
};
