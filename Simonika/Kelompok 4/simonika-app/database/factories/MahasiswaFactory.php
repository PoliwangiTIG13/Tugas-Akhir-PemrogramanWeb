<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
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
            'nama_mahasiswa' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'username' => $this->faker->userName(),
            'password' => bcrypt($this->faker->password()),
        ];
    }
}