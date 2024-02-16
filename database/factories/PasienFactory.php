<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = ['Pria', 'Wanita'];
        return [
            'No_RM' => mt_rand(100, 500),
            'Nama' => fake()->name(),
            'Alamat' => fake()->address(),
            'TTL' => fake()->city() . ' ' . fake()->date(),
            'Jenis_Kelamin' => $gender[mt_rand(0, 1)],
            'Pekerjaan' => fake()->jobTitle()
        ];
    }
}
