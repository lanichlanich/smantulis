<?php

namespace App\Exports;

use App\Models\SkNonPns;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SkNonPnsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SkNonPns::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'nama_pns',
            'no_sk',
            'tgl_sk',
            'tmt_sk',
            'softfile',
        ];
    }
}
