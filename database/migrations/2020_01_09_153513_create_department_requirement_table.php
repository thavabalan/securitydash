<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('d_id');
            $table->unsignedBigInteger('r_id');
            $table->text('confidentially');
            $table->text('integrity');
            $table->text('availability');
            $table->foreign('d_id')->references('id')->on('departments');
            $table->foreign('r_id')->references('id')->on('requirements');
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
        Schema::dropIfExists('department_requirement');
    }
}
