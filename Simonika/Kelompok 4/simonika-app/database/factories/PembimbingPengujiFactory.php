<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PembimbingPenguji>
 */
class PembimbingPengujiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'keterangan' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement(['acc', 'rej']),
            'nilaiSempro' => $this->faker->numberBetween(60, 100),
            'nilaiAkhir' => $this->faker->numberBetween(60, 100),
            'proyekAkhir_id' => mt_rand(1, 10),
            'dosen_id' => mt_rand(1, 10),
            'posisi_id' => mt_rand(1, 10),
        ];
    }
}