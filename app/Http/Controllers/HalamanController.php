<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
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

    public function Kepsek()
    {
        return view('halaman.kepsek');
    }

    public function Ppdb()
    {
        return view('halaman.ppdb');
    }

    public function Wakasek()
    {
        return view('halaman.wakasek');
    }
    public function Guru()
    {
        $gurus= Pegawai::where('jenis_ptk','Guru')->orderBy('tgl_lahir')->paginate(10);
        return view('halaman.guru', ['gurus' => $gurus]);
    }
    public function StafTu()
    {
        $tass= Pegawai::where('jenis_ptk','Tenaga Administrasi')->orderBy('tgl_lahir')->paginate(10);
        return view('halaman.tas', ['tass' => $tass]);
    }
}
