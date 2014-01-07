<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAllocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allocations', function(Blueprint $table) {
			$table->increments('id');
			$table->date('date');
			$table->integer('hours')->default(8);
			$table->integer('percent')->default(100);
			$table->integer('allocation')->default(1);
			$table->integer('resource_id');
			$table->integer('project_id');
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
		Schema::drop('allocations');
	}

}
