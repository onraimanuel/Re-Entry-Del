<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeraturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\peraturan::insert([
            [   
                'file_peraturan' => 'Protokol_Re-entry.pdf',
                'nama_peraturan' => 'Protokol Re-Entry Mahasiswa'
            ]
        ]);
    }
}
