<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PegawaiExport;

class PegawaiController extends Controller
{
    public function export() 
    {
        return Excel::download(new PegawaiExport, 'Daftar Pegawai.xlsx');
    }
}
