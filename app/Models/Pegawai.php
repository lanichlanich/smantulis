<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
            'nama',
            'jk',
            'nip',
            'nuptk',
            'tpt_lahir',
            'tgl_lahir',
            'ibu',
            'jenis_ptk',
            'status_ptk',
            'foto',
            'nik',
            'kk',
            'alamat',
            'suami_istri',
            'anak1',
            'anak2',
            'anak3',
            'karpeg',
            'bpjs',
            'npwp',
    ];
}
