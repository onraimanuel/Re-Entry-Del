<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerlengkapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\perlengkapan::insert([
        [
            'nama_perlengkapan' => 'Kemeja/kaos berkerah',
            'gambar' => 'kaosberkerah.jpg',
            'keterangan' => 'Untuk menghadiri perkuliahan, salah satunya adalah kaos IT Del. Jadi kemeja/kaos berkerah yang akan dibawa dari rumah sejumlah 4 buah karena kaos IT Del akan disediakan oleh kampus. Kemeja/kaos dapat berlengan pendek atau lengan panjang tetapi tidak boleh ketat',
            'jumlah' => '5 buah (termasuk kaos IT Del)',
            'filter' => 'aspa'
        ]
        ]);
    }
}
