<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
        	'address' => 'Jember',
        	'nomor_tlp' => '089683587371',
        	'ttl' => '2002-01-10',
        	'foto' => 'picture.png'
        ]);
    }
}
