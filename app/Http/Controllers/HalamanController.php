<?php

namespace App\Http\Controllers;

use App\Models\SuratOut;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function SuratKeluar()
    {
        $suratouts= SuratOut::orderBy('tgl_surat')->paginate(5);
        return view('halaman.surat-keluar', ['suratouts' => $suratouts]);
    }

    public function Rombel()
    {
        return view('halaman.rombel');
    }

    public function VisiMisi()
    {
        return view('halaman.visi-misi');
    }
}
