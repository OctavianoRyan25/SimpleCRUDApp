<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LaporKematianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nik' => $this->faker->unique()->numerify('################'),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'tempat_meninggal' => $this->faker->city,
            'tanggal_meninggal' => $this->faker->date(),
            'nama_suami_istri' => $this->faker->name('male'),
            'nama_anak' => $this->faker->name('female'),
            'status_kawin' => $this->faker->boolean(),
        ];
    }
}
