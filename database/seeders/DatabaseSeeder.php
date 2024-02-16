<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pasien;
use App\Models\Perawat;
use App\Models\Tindakan;
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
        User::factory(5)->create();
        Pasien::factory(5)->create();
        Perawat::factory(5)->create();
        Tindakan::factory(5)->create();
    }
}
