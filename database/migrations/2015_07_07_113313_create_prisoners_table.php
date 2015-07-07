<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('next_of_kin');
            $table->string('blood_group');
            $table->string('genotype');
            $table->string('disabilities');
            $table->string('mug_shot_left');
            $table->string('mug_shot_right');
            $table->string('mug_shot_center');
            $table->text('crime');
            $table->text('sentence');
            $table->date('birth_date');
            $table->date('sentence_start');
            $table->date('sentence_end');
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
        Schema::drop('prisoners');
    }
}
