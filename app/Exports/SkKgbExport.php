<?php

namespace App\Exports;

use App\Models\SkKgb;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SkKgbExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SkKgb::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'nama_pns',
            'no_sk',
            'tgl_sk',
            'tmt_sk',
            'kgb_yad',
            'golongan',
            'masa_kerja',
            'gaji_pokok',
            'softfile',
        ];
    }
}
