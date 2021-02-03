<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SkKgbExport;
use Maatwebsite\Excel\Facades\Excel;

class SkKgbController extends Controller
{
    public function export() 
    {
        return Excel::download(new SkKgbExport, 'SK KGB.xlsx');
    }
}
