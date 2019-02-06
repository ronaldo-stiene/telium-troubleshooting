<?php

use Illuminate\Database\Seeder;

class ContractItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contract_items')->insert([
            [
                'contract_item_id'  => 1,
                'description'       => 'Termo Financeiro',
                'contract_id'       => 'LOREN',
            ],
            [
                'contract_item_id'  => 2,
                'description'       => 'Termo Jurídico',
                'contract_id'       => 'LOREN',
            ],
            [
                'contract_item_id'  => 3,
                'description'       => 'Termo Operacional',
                'contract_id'       => 'LOREN',
            ]
        ]);
    }
}
