<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    //  nullable feld are updated user him self.
     
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable();;
            $table->string('country_id')->nullable();;
            $table->string('city_id')->nullable();;
            $table->string('postcode')->nullable();;
            $table->string('gender')->nullable();;
            $table->string('address')->nullable();;
            $table->string('parmanent_address')->nullable();;
            $table->string('about_me')->nullable();;
            $table->string('user_photo');
            $table->string('contact')->unique();
            $table->string('active')->default(1);
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
        Schema::dropIfExists('users');
    }
}
