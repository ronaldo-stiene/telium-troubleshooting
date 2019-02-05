<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contract_items', function(Blueprint $table)
		{
			$table->integer('contract_item_id')->primary();
			$table->string('description', 45);
			$table->integer('contract_id')->index('fk_contract_items_contract_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contract_items');
	}

}
