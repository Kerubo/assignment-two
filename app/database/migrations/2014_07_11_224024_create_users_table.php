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
		Schema::create('users', function($table)
{
    $table->increments('id');
    $table->string('names');
    $table->date('dob');
    $table->string('gender')->default('female')->nullable();
    $table->string('marital status');
    $table->string('country')->default('kenya')->nullable();
    $table->string('photo');
    $table->timestamps();
} );

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
