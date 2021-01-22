<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SkNonPnsExport;
use Maatwebsite\Excel\Facades\Excel;

class SkNonPnsController extends Controller
{
    public function export() 
    {
        return Excel::download(new SkNonPnsExport, 'SK NON CPNS.xlsx');
    }
}
