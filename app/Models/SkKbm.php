<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkKbm extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat',
        'tgl_surat',
        'tapel',
        'semester',
        'keterangan',
        'softfile',
    ];
}
