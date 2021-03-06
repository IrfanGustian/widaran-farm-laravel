<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use App\Models\Sapi;
use App\Models\Testimoni;
use App\Models\User;
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
        User::factory(1)->create();
        Sapi::factory(10)->create();
        Testimoni::factory(3)->create();
        Pertanyaan::factory(7)->create();
    }
}
