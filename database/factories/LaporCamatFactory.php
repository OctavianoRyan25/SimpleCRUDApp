<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaporCamat>
 */
class LaporCamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'aduan' => $this->faker->sentence(mt_rand(3, 10)),
            'tanggal' => $this->faker->date(),
            'lokasi' => $this->faker->address(),
            'keterangan' => $this->faker->paragraph(mt_rand(3, 10)),
            'gambar' => 'public/lapor_camat/zKtBjMae1Ormag1vI8hxns6VFVqKvgzKMWA67DfP.jpg',
        ];
    }
}
