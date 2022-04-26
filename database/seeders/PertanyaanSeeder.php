<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\pertanyaan::insert([
            [
                'pertanyaan' => 'Apakah pernah keluar rumah/tempat umum (pasar, fasyankes, kerumunan orang, dll) ?'
            ],
            [
                'pertanyaan' => 'Apakah pernah melakukan perjalanan transportasi umum ?'
            ],
            [
                'pertanyaan' => 'Apakah pernah melakukan perjalanan luar daerah/kota/internasional, atau ke wilayah yang terjangkit / zona merah ?'
            ],
            [
                'pertanyaan' => 'Apakah anda mengikuti kegiatan yang melibatkan orang banyak ?'
            ],
            [
                'pertanyaan' => 'Apakah anda memiliki riwayat kontak erat dengan orang yang dinyatakan Kasus Suspek, Kasus Probable, Kasus Konfirmasi, Kontak Erat dan / atau Discarded (berjabat tangan, berbicara, berada dalam satu ruangan/ satu rumah) ?'
            ],
            [
                'pertanyaan' => 'Apakah anda pernah mengalami demam/batuk/pilek/sakit tenggorokan/sesak dalam 14 hari terakhir ?'
            ]
            ]);
    }
}
