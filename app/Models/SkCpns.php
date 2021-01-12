<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkCpns extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat',
        'tgl_surat',
        'nama',
        'tmt',
        'golongan',
        'pejabat',
        'masa_kerja',
        'softfile',
    ];
}
