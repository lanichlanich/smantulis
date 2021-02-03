<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkKgb extends Model
{
    use HasFactory;

    protected $fillable = [

        'nama_pns',
        'no_sk',
        'tgl_sk',
        'tmt_sk',
        'kgb_yad',
        'golongan',
        'masa_kerja',
        'gaji_pokok',
        'softfile',

    ];
}
