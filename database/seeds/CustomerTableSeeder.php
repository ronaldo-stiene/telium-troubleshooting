<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'customer_id' => 1,
            'name'        => 'Operadora LTDA',
            'email'       => 'contato@operadora.com.br',
        ]);
    }
}
