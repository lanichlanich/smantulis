<?php

namespace App\Exports;

use App\Models\SuratIn;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuratInExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SuratIn::all();
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
