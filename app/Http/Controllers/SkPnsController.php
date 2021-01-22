<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SkPnsExport;
use Maatwebsite\Excel\Facades\Excel;

class SkPnsController extends Controller
{
    public function export() 
    {
        return Excel::download(new SkPnsExport, 'SK PNS.xlsx');
    }
}
