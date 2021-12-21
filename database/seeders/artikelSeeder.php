<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        artikel::factory()->count(5)->create();
    }
}
