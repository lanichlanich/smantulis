<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SkCpnsExport;
use Maatwebsite\Excel\Facades\Excel;

class SkCpnsController extends Controller
{
    public function export() 
    {
        return Excel::download(new SkCpnsExport, 'SK CPNS.xlsx');
    }
}
