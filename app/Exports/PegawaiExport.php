<?php

namespace App\Exports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PegawaiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pegawai::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'nama',
            'jk',
            'nip',
            'nuptk',
            'tpt_lahir',
            'tgl_lahir',
            'ibu',
            'jenis_ptk',
            'status_ptk',
            'foto',
            'nik',
            'kk',
            'alamat',
            'suami_istri',
            'anak1',
            'anak2',
            'anak3',
            'karpeg',
            'bpjs',
            'npwp',
        ];
    }
}
