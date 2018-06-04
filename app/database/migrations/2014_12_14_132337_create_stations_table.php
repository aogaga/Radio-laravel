<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::Create('stations', function(Blueprint $table)
		{
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->string('url')->unique();
            $table->text('description');
            $table->integer('categorys_id')->unsigned()->index();
            $table->foreign('categorys_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('country');
            $table->string('website');
			$table->string('facebook');
            $table->string('twitter');
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
		Schema::Drop('stations');
	}

}
