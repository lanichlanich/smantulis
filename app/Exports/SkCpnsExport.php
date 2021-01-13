<?php

namespace App\Exports;

use App\Models\SkCpns;
use Maatwebsite\Excel\Concerns\FromCollection;

class SkCpnsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SkCpns::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'nama_pns',
            'nip',
            'no_sk',
            'tgl_sk',
            'tmt_sk',
            'pejabat',
            'softfile',
        ];
    }
}
