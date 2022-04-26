<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RuangkamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\ruangkamar::insert([
            [
                'nama_asrama' => 'RUSUN 4',
                'nomor_kamar' => 'Kamar 10 Lantai 4'
            ]
            ]);
    }
}
