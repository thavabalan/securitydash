<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItilsRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itils_requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('r_id');
            $table->unsignedBigInteger('i_id');
            $table->foreign('r_id')->references('id')->on('requirements');
            $table->foreign('i_id')->references('id')->on('itils');           
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
        Schema::dropIfExists('itils_requirement');
    }
}
