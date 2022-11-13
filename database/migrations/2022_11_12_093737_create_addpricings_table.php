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
            $table->string('service1');
            $table->string('service2');
            $table->string('service3');
            $table->string('service4');
            $table->string('service5');
            $table->string('service6');
            $table->string('service7');
            $table->string('service8');
            $table->string('service9');
            $table->string('service10');
            $table->string('service11');
            $table->string('service12');
            $table->string('service13');
            $table->string('service14');
            $table->string('service15');
            $table->string('service16');
            $table->string('service17');
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
