<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contract', function(Blueprint $table)
		{
			$table->string('contract_id',20)->primary();
			$table->string('description', 256);
			$table->integer('customer_id')->index('fk_contract_customer_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contract');
	}

}
