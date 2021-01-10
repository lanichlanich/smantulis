<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SuratOutExport;
use Maatwebsite\Excel\Facades\Excel;

class SuratOutController extends Controller
{
    public function export() 
    {
        return Excel::download(new SuratOutExport, 'Surat Keluar.xlsx');
    }
}
