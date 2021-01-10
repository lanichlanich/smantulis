<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SkKbmExport;
use Maatwebsite\Excel\Facades\Excel;

class SkKbmController extends Controller
{
    public function export() 
    {
        return Excel::download(new SkKbmExport, 'SK KBM.xlsx');
    }
}
