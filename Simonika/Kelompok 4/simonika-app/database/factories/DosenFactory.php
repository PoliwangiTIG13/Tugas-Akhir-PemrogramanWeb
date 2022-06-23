<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => $this->faker
                ->unique()
                ->numberBetween(19760122202121100, 197601222021212000),
            'nidn' => $this->faker->numberBetween(5108001, 5109001),
            'nama' => $this->faker->name(),
            'telepon' => $this->faker->phoneNumber(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'keahlian' => $this->faker->jobTitle(),
            'username' => $this->faker->userName(),
            'password' => bcrypt($this->faker->password()),
            'UserRole_id' => $this->faker->numberBetween(1, 1),
            'proyekDosen_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}