<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProyekAkhir>
 */
class ProyekAkhirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judulPA' => $this->faker->sentence(4),
            'mahasiswa_id' => $this->faker->unique()->numberBetween(1, 10),
            'kategori_id' => mt_rand(1, 2),
            'status' => $this->faker->numberBetween(1, 2),
            'nilaiSempro' => $this->faker->numberBetween(60, 100),
            'nilaiAkhir' => $this->faker->numberBetween(60, 100),
            'tahunAkademikPengajuan' => $this->faker->year('+7 years'),
        ];
    }
}