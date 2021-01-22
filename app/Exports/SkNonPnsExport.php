<?php

namespace App\Exports;

use App\Models\SkNonPns;
use Maatwebsite\Excel\Concerns\FromCollection;

class SkNonPnsExport implements FromCollection
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
