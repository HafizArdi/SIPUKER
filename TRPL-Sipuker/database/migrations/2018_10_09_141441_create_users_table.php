<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('id_level')->index('id_level');
			$table->string('tempat_lahir', 100);
			$table->date('tanggal_lahir');
			$table->string('jenis_kelamin', 100);
			$table->string('alamat', 100);
			$table->string('telpon', 100);
			$table->string('nama_ukm', 100);
			$table->string('jenis_ukm', 100);
			$table->string('alamat_ukm', 100);
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
