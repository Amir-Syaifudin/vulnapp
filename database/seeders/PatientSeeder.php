<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diagnosis = [
            'Demam Berdarah Dengue',
            'Hipertensi Stadium 2',
            'Diabetes Melitus Tipe 2',
            'Pneumonia',
            'Gastroenteritis Akut',
            'Fraktur Femur Tertutup',
            'Tuberkulosis Paru',
            'Gagal Ginjal Kronis',
            'Stroke Iskemik',
            'Apendisitis Akut',
        ];

        $dokter = [
            'dr. Andi Wijaya, Sp.PD',
            'dr. Siti Rahmawati, Sp.A',
            'dr. Budi Santoso, Sp.B',
            'dr. Maya Kusuma, Sp.JP',
            'dr. Hendra Gunawan, Sp.PD',
        ];

        $faker = fake('id_ID');

        for ($i = 1; $i <= 30; $i++) {
            Patient::create([
                'no_rm' => 'RM-'.str_pad((string) $i, 6, '0', STR_PAD_LEFT),
                'nama' => $faker->name(),
                'nik' => $faker->numerify('################'),
                'tanggal_lahir' => $faker->dateTimeBetween('-80 years', '-1 years')->format('Y-m-d'),
                'alamat' => $faker->address(),
                'diagnosis' => $faker->randomElement($diagnosis),
                'dokter_penanggung_jawab' => $faker->randomElement($dokter),
                'tanggal_masuk' => $faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
                'catatan_medis' => 'Pasien datang dengan keluhan sesuai diagnosis, riwayat penyakit '
                    .$faker->randomElement(['tidak ada', 'hipertensi keluarga', 'alergi obat tertentu', 'asma'])
                    .'. Kondisi saat ini: '.$faker->randomElement(['stabil', 'dalam pemantauan', 'membaik', 'rawat inap lanjutan']).'.',
            ]);
        }
    }
}
