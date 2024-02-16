<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tindakan>
 */
class TindakanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'No_Registrasi' => mt_rand(100, 1000),
            'ID_Perawat' => mt_rand(1, 5),
            'ID_Pasien' => mt_rand(1, 5),
            'Jam' => '24:00',
            'Diagnosa' => 'sakit hati',
            'Tindakan_Keperawatan' => 'diinfus',
            'No_Ruangan' => mt_rand(1, 100),
            'Keterangan' => 'dirawat',
        ];
    }
}
