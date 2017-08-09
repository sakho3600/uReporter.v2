<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('contact_number')->unique();
            $table->string('email_address')->unique();
            $table->string('password');
            $table->string('national_id_number')->unique();
            $table->date('date_of_birth');
            $table->string('occupation');
            $table->string('designation')->nullable();
            $table->text('contact_address')->nullable();
            $table->string('user_type');
            $table->float('personal_rating')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
