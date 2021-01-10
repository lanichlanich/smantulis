<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratOut extends Model
{
    use HasFactory;

    protected $fillabe = [
        'no_surat',
        'tgl_surat',
        'perihal',
        'tujuan',
        'keterangan',
        'softfile',
    ];
}
