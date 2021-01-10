<?php

namespace App\Exports;

use App\Models\SuratOut;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuratOutExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SuratOut::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'No Surat',
            'Tanggal Surat',
            'Perihal',
            'Tujuan',
            'Keterangan',
            'Softfile',
        ];
    }
}
