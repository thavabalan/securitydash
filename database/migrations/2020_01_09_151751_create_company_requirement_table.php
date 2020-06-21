<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_requirement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('c_id');
            $table->unsignedBigInteger('r_id');
            $table->text('status');
            $table->text('tool_used');
            $table->text('level_of_maturity');
            $table->text('linux_covered');
            $table->text('windows_covered');
            $table->text('clients_covered');
            $table->text('servers_covered');
            $table->text('terminal_c_drive_covered');
            $table->text('pti');
            $table->text('response_time_c');
            $table->text('response_time_i');
            $table->text('performance_issue');
            $table->text('mean_time_to_response_c');
            $table->text('mean_time_to_response_i');
            $table->text('cost');
            $table->text('contract_expiry_date');
            $table->text('license_required');
            $table->text('hyperlink_documentation');
            $table->text('comments');
            $table->foreign('c_id')->references('id')->on('companies');
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
        Schema::dropIfExists('company_requirement');
    }
}
