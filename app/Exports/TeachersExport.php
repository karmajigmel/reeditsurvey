<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;

class TeachersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    public function collection()
    {
        $data = DB::table('teachers')
            ->leftJoin('districts', 'teachers.TG3', '=', 'districts.district_id')
            ->get();

        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'TG1',
            'TG2',
            'TG3',
            'TG4',
            'TG5',
            'TG6',
            'TG7',
            'TG8',
            'TG9',
            'TG10',
            'TG11',
            'TG12',
            'TG13',
            'TG14',
            'TG15',
            'TG16',
            'TG17',
            'TG18',
            'TG19',
            'TG20',
            'TG21',
            'TG22',
            'TG23',
            'TG24',
            'TG25',
            'TG26',
            'TG27',
            'TG28',
            'TG29',
            'created_at',
            'updated_at',
            'district_id',
            'dzongkhag_thromde'
        ];
    }

    public function title(): string
    {
        return ('Teacher Data');
    }
}
