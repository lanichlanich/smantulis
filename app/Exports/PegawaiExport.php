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
            'foto',
            'nama',
            'jk',
            'nik',
            'tgl_lahir',
            'tpt_lahir',
            'nip',
            'nuptk',
        ];
    }
}
