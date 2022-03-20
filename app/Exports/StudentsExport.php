<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;

class StudentsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    public function collection()
    {
        $data = DB::table('students')
            ->leftJoin('districts', 'students.S2', '=', 'districts.district_id')
            ->get();

        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'S1',
            'S2',
            'S3',
            'S4',
            'S5',
            'S6',
            'S7',
            'S8',
            'S9',
            'S10',
            'S11',
            'S12',
            'S13',
            'S14',
            'S15',
            'S16',
            'S17',
            'S18',
            'S19',
            'S20',
            'S21',
            'S22',
            'S23',
            'S24',
            'S25',
            'created_at',
            'updated_at',
            'district_id',
            'dzongkhag_thromde'
        ];
    }

    public function title(): string
    {
        return ('Student Data');
    }
}
