<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaSertifikasi extends Model
{
    protected $table = 'peserta_sertifikasi';

    protected $fillable = [
        'no_registrasi',
        'nama',
        'nik',
        'instansi',
        'skema_sertifikasi',
        'asesor_penanggung_jawab',
        'tanggal_asesmen',
        'hasil',
        'catatan_asesor',
    ];
}
