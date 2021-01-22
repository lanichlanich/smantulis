<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkPns extends Model
{
    use HasFactory;

    protected $fillable = [

        'nama_pns',
        'no_sk',
        'tgl_sk',
        'tmt_sk',
        'golongan',
        'masa_kerja',
        'gaji_pokok',
        'angka_kredit',
        'pejabat',
        'softfile',

    ];
}
