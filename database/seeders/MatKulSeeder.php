<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatKulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'hari' => 'Senin',
                'kodemk' => 'RTI214006',
                'mataKuliah' => 'Jaringan Komputer',
                'dosen' => 'Ade Ismail, S.Kom., M.TI.',
            ],
            [
                'hari' => 'Senin',
                'kodemk' => 'RTI214003',
                'mataKuliah' => 'Manajemen Proyek',
                'dosen' => 'Chandrasena Setiadi, S.T., M.Tr.T.',
            ],
            [
                'hari' => 'Selasa',
                'kodemk' => 'RTI214001',
                'mataKuliah' => 'Kewarganegaraan',
                'dosen' => 'Widaningsih, S.H., M.H.',
            ],
            [
                'hari' => 'Selasa',
                'kodemk' => 'RTI214002',
                'mataKuliah' => 'Analisis dan Desain Berorentasi Objek',
                'dosen' => 'Vit Zuraida, S.Kom., M.Kom.',
            ],
            [
                'hari' => 'Rabu',
                'kodemk' => 'RTI214008',
                'mataKuliah' => 'Pemrograman Web Lanjut',
                'dosen' => 'Mamluatul Haniah, S.Kom., M.Kom.',
            ],
            [
                'hari' => 'Rabu',
                'kodemk' => 'RTI214005',
                'mataKuliah' => 'Business Intelligence',
                'dosen' => 'Irsyad Arif Mashudi, S.Kom., M.Kom.',
            ],
            [
                'hari' => 'Kamis',
                'kodemk' => 'RTI214009',
                'mataKuliah' => 'Statistik Komputasi',
                'dosen' => 'Muhammad Afif Hendrawan, S.Kom., M.T.',
            ],
            [
                'hari' => 'Kamis',
                'kodemk' => 'RTI214004',
                'mataKuliah' => 'Proyek 1',
                'dosen' => 'Rokhimatul Wakhidah, S.Pd., M.T.',
            ],
            [
                'hari' => 'Jumat',
                'kodemk' => 'RTI214007',
                'mataKuliah' => 'Praktikum Jaringan Komputer',
                'dosen' => 'Ade Ismail, S.Kom., M.TI.',
            ],
        ];
        DB::table('matkul')->insert($data);
    }
}
