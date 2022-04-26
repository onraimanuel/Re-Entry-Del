<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PerlengkapanSeeder::class);
        $this->call(PeraturanSeeder::class);
        $this->call(RuangkamarSeeder::class);
        $this->call(PertanyaanSeeder::class);
        $this->call(LayananSeeder::class);
    }
}
