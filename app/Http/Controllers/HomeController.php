<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pns = Pegawai::where('status_ptk',"PNS")->get()->count();
        $non_pns = Pegawai::where('status_ptk',"NON PNS")->get()->count();
        $guru = Pegawai::where('jenis_ptk',"Guru")->get()->count();
        $tu = Pegawai::where('jenis_ptk',"Tenaga Administrasi")->get()->count();
        
        return view('home', [
            'pns' => $pns,
            'non_pns' => $non_pns,
            'guru' => $guru,
            'tu' => $tu,
            ]);
    }
}
