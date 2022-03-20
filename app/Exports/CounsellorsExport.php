<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;

class CounsellorsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    public function collection()
    {
        $data = DB::table('counsellors')
            ->leftJoin('districts', 'counsellors.C3', '=', 'districts.district_id')
            ->get();

        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'C1',
            'C2',
            'C3',
            'C4',
            'C5',
            'C6',
            'C7',
            'C8',
            'C9',
            'C10',
            'C11',
            'C12',
            'C13',
            'C14',
            'C15',
            'C16',
            'C17',
            'C18',
            'C19',
            'C20',
            'C21',
            'C22',
            'C23',
            'C24',
            'C25',
            'C26',
            'C27',
            'C28',
            'created_at',
            'updated_at',
            'district_id',
            'dzongkhag_thromde'
        ];
    }

    public function title(): string
    {
        return ('Counsellor Data');
    }
}
