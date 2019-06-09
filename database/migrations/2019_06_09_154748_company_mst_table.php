<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyMstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_mst', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_code', 5)->unique();
            $table->string('company_name', 128);
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
        Schema::dropIfExists('company_mst');
    }
}
