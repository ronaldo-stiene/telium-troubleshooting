<?php

use Illuminate\Database\Seeder;

class ContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contract')->insert([
            'contract_id'   => 'LOREN',
            'description'   => 'Contrato Loren',
            'customer_id'   => 1,
        ]);
    }
}
