<?php

namespace App\Exports;

use App\Models\SkPns;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SkPnsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SkPns::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'nama_pns',
            'no_sk',
            'tgl_sk',
            'tmt_sk',
            'golongan',
            'masa_kerja',
            'gaji_pokok',
            'angka_kredit',
            'pejabat',
            'softfile',
        ];
    }
}
