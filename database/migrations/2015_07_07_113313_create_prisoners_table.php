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
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('address');
            $table->string('next_of_kin');
            $table->string('next_of_kin_phone');
            $table->string('blood_group');
            $table->date('birth_date');
            $table->string('genotype');
            $table->string('disabilities');
            $table->string('left_mug_shot');
            $table->string('right_mug_shot');
            $table->string('center_mug_shot');
            $table->string('arresting_officer');
            $table->text('crime');
            $table->text('sentence');
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
