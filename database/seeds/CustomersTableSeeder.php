<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
        	'kode'		=>  'CS02',
        	'nama'		=>	'Customer 02',
        	'negara'	=>	'Negara 02',
        	'keterangan'=>	'-',
        	'user_id'	=>	'1',
        ]);
    }
}
