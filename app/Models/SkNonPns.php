<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkNonPns extends Model
{
    use HasFactory;

    protected $fillable = [

        'nama_non_pns',
        'no_sk',
        'tgl_sk',
        'tmt_sk',
        'softfile',

    ];
}
