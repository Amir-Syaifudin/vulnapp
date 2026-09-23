<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'no_rm',
        'nama',
        'nik',
        'tanggal_lahir',
        'alamat',
        'diagnosis',
        'dokter_penanggung_jawab',
        'tanggal_masuk',
        'catatan_medis',
    ];
}
