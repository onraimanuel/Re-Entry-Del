<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\layanan::insert([
            [
                'nik' =>'1234567890123456',
                'angkatan' =>'2020',
                'prodi' =>'D4 TRPL',
                'tanggal' => '2022-04-02',
                'nohp' => '082215836273',
                'fileswab'=> 'oke.pdf',
                'filepersetujuan' => 'okeoke.pdf'
            ]
            ]);

    }
}
