<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perawat>
 */
class PerawatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ID_Perawat' => mt_rand(100, 1000),
            'ID_Poliklinik' => mt_rand(100, 1000),
            'Nama' => fake()->name(),
            'Alamat' => fake()->address(),
            'Tgl_Lahir' => fake()->date(),
        ];
    }
}
