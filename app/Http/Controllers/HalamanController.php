<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\SuratOut;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
//use Goutte\Client;
use Sunra\PhpSimple\HtmlDomParser;

class HalamanController extends Controller
{
    private $results = array();

    public function SuratKeluar()
    {
        $suratouts = SuratOut::orderBy('tgl_surat')->paginate(5);
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
    public function InfoPip()
    {
        return view('halaman.info-pip');
    }

    public function Wakasek()
    {
        return view('halaman.wakasek');
    }
    public function Guru()
    {
        $gurus = Pegawai::where('jenis_ptk', 'Guru')->orderBy('tgl_lahir')->paginate(10);
        return view('halaman.guru', ['gurus' => $gurus]);
    }
    public function StafTu()
    {
        $tass = Pegawai::where('jenis_ptk', 'Tenaga Administrasi')->orderBy('tgl_lahir')->paginate(10);
        return view('halaman.tas', ['tass' => $tass]);
    }

    public function Dapodik()
    {
        $client = new Client();
        $url = 'https://dapo.kemdikbud.go.id/sekolah/6993E230429CAEE0FAF1';
        $response = $client->request('GET', $url);
        $status = $response->getStatusCode();
        $html = $response->getBody()->getContents();

        if ($status == 200) {
            $dom = HtmlDomParser::str_get_html($html);
            dd($dom);
        }
    }
}
