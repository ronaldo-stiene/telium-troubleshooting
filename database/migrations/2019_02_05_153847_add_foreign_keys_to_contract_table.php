<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContractTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contract', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_contract_customer')->references('customer_id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contract', function(Blueprint $table)
		{
			$table->dropForeign('fk_contract_customer');
		});
	}

}
