<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SuratInExport;
use Maatwebsite\Excel\Facades\Excel;

class SuratInController extends Controller
{
    public function export() 
    {
        return Excel::download(new SuratInExport, 'Surat Masuk.xlsx');
    }
}
