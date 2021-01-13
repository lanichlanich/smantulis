<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkCpns extends Model
{
    use HasFactory;

    protected $fillable = [

        'nama_pns',
        'nip',
        'no_sk',
        'tgl_sk',
        'tmt_sk',
        'pejabat',
        'softfile',

    ];
}
