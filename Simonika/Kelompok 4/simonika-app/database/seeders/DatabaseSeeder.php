<?php

namespace Database\Seeders;

use App\Models\CatatanRevisi;
use App\Models\Category;
use App\Models\Dosen;
use App\Models\DosenBimOne;
use App\Models\DosenBimTwo;
use App\Models\DosenJiOne;
use App\Models\DosenJiTwo;
use App\Models\Information;
use App\Models\KategoriPA;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\PembimbingPenguji;
use App\Models\Posisi;
use App\Models\ProyekAkhir;
use App\Models\ProyekDosen;
use App\Models\Result;
use App\Models\Ruangan;
use App\Models\Ujian;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Information::factory(20)->create();
        DosenBimOne::factory(20)->create();
        DosenBimTwo::factory(20)->create();
        DosenJiOne::factory(20)->create();
        DosenJiTwo::factory(20)->create();
        Mahasiswa::factory(10)->create();
        ProyekAkhir::factory(10)->create();
        Ruangan::factory(7)->create();
        Ujian::factory(10)->create();
        Dosen::factory(10)->create();
        ProyekDosen::factory(10)->create();
        PembimbingPenguji::factory(10)->create();
        CatatanRevisi::factory(10)->create();

        Category::create([
            'name' => 'Sempro',
            'deskripsi' => 'Seminar Proposal',
        ]);

        Category::create([
            'name' => 'Semhas',
            'deskripsi' => 'Seminar Hasil',
        ]);

        Result::create([
            'value' => 'Approve',
        ]);

        Result::create([
            'value' => 'Disapprove',
        ]);

        KategoriPA::create([
            'namaKategori' => 'Sempro',
            'deskripsi' => 'Seminar Proposal',
        ]);

        KategoriPA::create([
            'namaKategori' => 'Semhas',
            'deskripsi' => 'Seminar Hasil',
        ]);

        User::create([
            'name' => 'Kategori PA',
            'username' => 'katPA',
            'email' => 'pembimbingAkademik@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Posisi::create([
            'posisi' => 'Dosen Pembimbing 1',
        ]);
        Posisi::create([
            'posisi' => 'Dosen Pembimbing 2',
        ]);
        Posisi::create([
            'posisi' => 'Dosen Penguji 1',
        ]);
        Posisi::create([
            'posisi' => 'Dosen Penguji 2',
        ]);

        UserRole::create([
            'nama_role' => 'Koordinator PA',
        ]);
    }
}
