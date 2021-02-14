<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PageExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function export() 
    {
        return Excel::download(new PageExport, 'Daftar Page.xlsx');
    }

    public function show(Page $slug)
    {   
        return view('halaman', compact('slug'));
    }
}
