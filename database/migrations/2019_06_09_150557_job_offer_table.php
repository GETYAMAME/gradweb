<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offer', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->bigIncrements('job_offer_id');
            $table->string('company_code', 5);
            $table->string('job_name', 60);
            $table->string('title', 100);
            $table->string('company_feature1', 60)->nullable();
            $table->string('company_feature2', 60)->nullable();
            $table->string('company_feature3', 60)->nullable();
            $table->string('company_feature4', 60)->nullable();
            $table->string('company_feature5', 60)->nullable();
            $table->string('outer_url', 512)->nullable();;
            $table->string('image_name', 50);
            $table->dateTime('update_date');
            $table->dateTime('insert_date');
            $table->integer('del_flg')->default(0);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_offer');
    }
}
