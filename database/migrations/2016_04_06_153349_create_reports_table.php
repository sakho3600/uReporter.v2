<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('report_type');
            $table->string('report_subtype');
            $table->string('accused')->nullable();
            $table->string('responsible')->nullable();
            $table->dateTime('date_and_time');
            $table->text('incident_location');
            $table->mediumText('short_description');
            $table->string('evidences');
            $table->unsignedInteger('reporter_id')->nullable();
            $table->foreign('reporter_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('report');
    }
}
