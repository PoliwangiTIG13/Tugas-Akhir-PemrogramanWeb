<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ujian>
 */
class UjianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jenisUjian' => $this->faker->randomElement(['Sempro', 'Semhas']),
            'proyekAkhir_id' => mt_rand(1, 10),
            'ruangan_id' => mt_rand(1, 7),
            'draft' => $this->faker->sentence(5),
            'dokumenTambahan' => $this->faker->sentence(3),
            'tanggalUjian' => $this->faker->date('Y_m_d'),
            'waktuUjian' => $this->faker->numberBetween(60, 75),
        ];
    }
}