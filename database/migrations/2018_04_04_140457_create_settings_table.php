<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_name');
            $table->string('app_author');
            $table->string('app_type');
            $table->string('app_vishon');
            $table->string('meta_author');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('postcode');
            $table->string('contact');
            $table->string('mail');
            $table->string('logo');
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
        Schema::dropIfExists('settings');
    }
}
