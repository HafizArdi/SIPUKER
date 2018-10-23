<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPinjamanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pinjaman', function(Blueprint $table)
		{
			$table->foreign('id_status', 'pinjaman_ibfk_1')->references('id_status')->on('status')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pinjaman', function(Blueprint $table)
		{
			$table->dropForeign('pinjaman_ibfk_1');
		});
	}

}
