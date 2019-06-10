<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecruitmentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('recruiter_company_code',5);
            $table->string('recruitered_company_code',5);
            $table->integer('evaluation_score');
            $table->string('status',1);
            $table->integer('job_offer_id');
            $table->dateTime('update_date');
            $table->dateTime('insert_date');
            $table->integer('del_flg')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitment_info');
    }
}
