<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('business_priority');
            $table->text('current_risk');
            $table->unsignedBigInteger('c_id');
            $table->unsignedBigInteger('dependence')->nullable();
            $table->foreign('c_id')->references('id')->on('categories');
            $table->foreign('dependence')->references('id')->on('requirements');
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
        Schema::dropIfExists('requirements');
    }
}
