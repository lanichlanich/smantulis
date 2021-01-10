<?php

namespace App\Exports;

use App\Models\SkKbm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SkKbmExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SkKbm::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'No Surat',
            'Tanggal Surat',
            'Tahun Pelajaran',
            'Semester',
            'Keterangan',
            'Softfile',
        ];
    }
}
