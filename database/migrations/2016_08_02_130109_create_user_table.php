<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
=======
			$table->string('user_name');
			$table->string('user_pass');
>>>>>>> 14cd58593430b456dcb7f9875e90c0e663299a7d:database/migrations/2016_08_02_130109_create_user_table.php
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
        Schema::drop('user');
    }
}
