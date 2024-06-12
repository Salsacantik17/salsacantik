<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();

        Mahasiswa::create([
            'nim' => 'E020322112',
            'nama' => 'Salsacantik',
            'no_hp' => '085349768080',
            'alamat' => 'Soetoyo S',
            'foto' => 'E020322112.jpg',
            'password' => '123',
            'prodi_id' => 1,
        ]);

        Mahasiswa::create([
            'nim' => 'E020322089',
            'nama' => 'Memewcantik',
            'no_hp' => '087899317340',
            'alamat' => 'Cemara',
            'foto' => 'E020322112.jpg',
            'password' => '123',
            'prodi_id' => 2,
        ]);

        Mahasiswa::factory(100)->create();
    }
}
