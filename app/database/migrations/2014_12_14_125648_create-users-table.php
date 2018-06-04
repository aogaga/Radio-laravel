<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::Create('users', function(Blueprint $table){

            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('firstname', 20);
            $table->string('lastname', 20);
            $table->string('email', 100)->unique();
            $table->string('password', 64);
            $table->string('remember_token');
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
		Schema::Drop('users');
	}

}