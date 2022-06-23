<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CatatanRevisi>
 */
class CatatanRevisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pembimbingPenguji_id' => mt_rand(1, 10),
            'catatan' => $this->faker->sentence(7),
            'tanggal' => $this->faker->date('Y_m_d'),
        ];
    }
}