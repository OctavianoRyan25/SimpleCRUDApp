<?php

namespace Database\Seeders;

use App\Models\DataAnak;
use App\Models\DataAyah;
use App\Models\DataIbu;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LaporCamat;
use App\Models\LaporDesa;
use App\Models\LaporKelahiran;
use App\Models\LaporKematian;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Ryan Eka',
            'email' => 'octavianoryan@gmail.com',
            'is_admin' => true,
        ]);

        LaporCamat::factory(100)->create();
        LaporDesa::factory(100)->create();

        // Seed Laporan Kelahiran
        // Seed data ayahs
        $ayah = DataAyah::create([
            'nama' => 'Nama Ayah',
            'alamat' => 'Alamat Ayah',
            'nik' => '1234567890123456',
            'nomor_hp' => '081234567890'
        ]);

        // Seed data ibus
        $ibu = DataIbu::create([
            'nama' => 'Nama Ibu',
            'alamat' => 'Alamat Ibu',
            'nik' => '1234567890123457',
            'nomor_hp' => '081234567891'
        ]);

        // Seed data anaks
        $anak = DataAnak::create([
            'nama' => 'Nama Anak',
            'tanggal_lahir' => '2024-04-04',
            'jenis_kelamin' => 'Laki-laki',
            'data_kelahiran_id' => 1 // ID dari data kelahiran yang sesuai
        ]);

        // Seed lapor kelahirans
        LaporKelahiran::create([
            'nomor_kk' => '1234567890',
            'anak_ke' => 1,
            'jenis_kelamin' => 'Laki-laki',
            'jam_lahir' => '08:00:00',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => '2024-04-04',
            'ayah_id' => $ayah->id,
            'ibu_id' => $ibu->id
        ]);

        LaporKematian::factory()->count(10)->create();
    }
}
