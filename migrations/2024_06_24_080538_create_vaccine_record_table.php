<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('std_id');
            $table->unsignedBigInteger('vac_id');
            $table->unsignedBigInteger('vaccined_date');
            $table->timestamps();

            $table->foreing('std_id')->referrences('id')->on('student');
            $table->foreing('vac_id')->referrences('id')->on('vaccine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine_record');
    }
}
