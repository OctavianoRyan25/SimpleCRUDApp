<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaporDesa>
 */
class LaporDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kegiatan' => $this->faker->sentence,
            'penanggung_jawab' => $this->faker->name,
            'tanggal' => $this->faker->date,
            'hasil_kegiatan' => $this->faker->paragraph,
            'kendala' => $this->faker->sentence,
            'gambar' => 'public/lapor_camat/zKtBjMae1Ormag1vI8hxns6VFVqKvgzKMWA67DfP.jpg',
        ];
    }
}
