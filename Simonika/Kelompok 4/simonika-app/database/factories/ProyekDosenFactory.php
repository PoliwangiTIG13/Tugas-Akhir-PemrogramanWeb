<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProyekDosen>
 */
class ProyekDosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dosen_id' => mt_rand(1, 10),
            'kategoriPA_id' => mt_rand(1, 2),
            'topik' => $this->faker->sentence(3),
            'deskripsi' => $this->faker->sentence(7),
            'kebutuhan' => mt_rand(1, 3),
        ];
    }
}