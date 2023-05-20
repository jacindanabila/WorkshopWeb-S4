<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '08xxxxxxx',
            'ttl' => '2003-10-16',
            'foto' => 'picture.jpeg'
        ]);
    }
}
