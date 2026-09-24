<?php

namespace Database\Seeders;

use App\Models\PesertaSertifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSertifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skema = [
            'Ilmuwan Data',
            'Ilmuwan Data Madya',
            'Analis Statistik',
            'Manajemen Sistem Informasi Sertifikasi',
            'Asesor Kompetensi',
        ];

        $asesor = [
            'Andi Wijaya, S.ST., M.Si.',
            'Siti Rahmawati, S.ST., M.T.',
            'Budi Santoso, S.ST., M.Kom.',
            'Maya Kusuma, S.ST., M.Stat.',
            'Hendra Gunawan, S.ST., M.Si.',
        ];

        $hasil = ['Kompeten', 'Belum Kompeten', 'Dalam Proses Asesmen'];

        $faker = fake('id_ID');

        for ($i = 1; $i <= 30; $i++) {
            PesertaSertifikasi::create([
                'no_registrasi' => 'LSP-'.str_pad((string) $i, 6, '0', STR_PAD_LEFT),
                'nama' => $faker->name(),
                'nik' => $faker->numerify('################'),
                'instansi' => $faker->randomElement([
                    'Politeknik Statistika STIS', 'BPS Provinsi', 'Kementerian/Lembaga', 'Universitas Mitra',
                ]),
                'skema_sertifikasi' => $faker->randomElement($skema),
                'asesor_penanggung_jawab' => $faker->randomElement($asesor),
                'tanggal_asesmen' => $faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
                'hasil' => $faker->randomElement($hasil),
                'catatan_asesor' => 'Peserta telah mengikuti seluruh unit kompetensi sesuai skema. Rekomendasi: '
                    .$faker->randomElement(['lanjut ke tahap sertifikasi', 'perlu remedial pada unit tertentu', 'perlu observasi tambahan']).'.',
            ]);
        }
    }
}
