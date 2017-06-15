<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('business_company')->nullable();
            $table->string('image')->nullable();
            $table->string('id_number')->nullable();
//            $table->string('user_name')->nullable();
//            $table->string('email')->nullable();
            $table->string('address_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('subscriptions')->nullable();
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
        Schema::drop('user_profile');
    }
}
