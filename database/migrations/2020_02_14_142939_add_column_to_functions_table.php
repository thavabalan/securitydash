<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_requirements', function (Blueprint $table) {
            $table->text('start_time');
            $table->text('end_time');
            $table->text('latest_start_time');
            $table->text('latest_end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_requirements', function (Blueprint $table) {
            //
        });
    }
}
