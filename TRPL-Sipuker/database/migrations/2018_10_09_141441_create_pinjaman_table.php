<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePinjamanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pinjaman', function(Blueprint $table)
		{
			$table->integer('id_peminjam', true);
			$table->string('nama_peminjam', 100);
			$table->decimal('besar_pinjaman', 10, 0);
			$table->string('jenis_pinjaman', 100);
			$table->string('metode_pelunasan', 100);
			$table->date('tanggal_pinjam');
			$table->integer('id_status')->index('id_status');
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
		Schema::drop('pinjaman');
	}

}
