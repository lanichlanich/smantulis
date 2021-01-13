<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama',
        'jk',
        'nik',
        'tgl_lahir',
        'tpt_lahir',
        'jenis_ptk',
        'status_ptk',
    ];
}
