<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerlengkapanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\perlengkapan::insert([
            [
                'nama_perlengkapan' => 'Baju',
                'gambar' => 'Tugaskalkulator.png',
                'keterangan' => 'Baju',
                'jumlah' => '1 Buah',
                'filter' => 'aspa'
            ],            
            [
                'nama_perlengkapan' => 'Baju',
                'gambar' => 'Tugaskalkulator.png',
                'keterangan' => 'Baju',
                'jumlah' => '1 Buah',
                'filter' => 'aspi'
            ]
        ]);
    }
}
