<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nim' => $this->faker
                ->unique()
                ->numberBetween(362055401100, 362055401200),
            // 'slug' => $this->faker->slug(),
            'nama' => $this->faker->name(),
            'judulPA' => $this->faker->sentence(4),
            'nilai' => $this->faker->randomElement([
                'A',
                'AB',
                'BC',
                'C',
                'D',
                'E',
            ]),
            'category_id' => mt_rand(1, 2),
            'result_id' => mt_rand(1, 2),
            'dosenone_id' => mt_rand(1, 20),
            'dosentwo_id' => mt_rand(1, 20),
            'dosenthird_id' => mt_rand(1, 20),
            'dosenfour_id' => mt_rand(1, 20),
            // 'dosen_id' => mt_rand(1, 10),
        ];
    }
}
