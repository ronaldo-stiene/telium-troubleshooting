<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContractItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contract_items', function(Blueprint $table)
		{
			$table->foreign('contract_id', 'fk_contract_items_contract')->references('contract_id')->on('contract')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contract_items', function(Blueprint $table)
		{
			$table->dropForeign('fk_contract_items_contract');
		});
	}

}
