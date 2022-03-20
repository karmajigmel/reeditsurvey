<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;

class TeachersensExport implements FromCollection, WithHeadings, ShouldAutoSize, WithTitle
{
    public function collection()
    {
        $data = DB::table('teachersens')
            ->leftJoin('districts', 'teachersens.TS3', '=', 'districts.district_id')
            ->get();

        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'TS1',
            'TS2',
            'TS3',
            'TS4',
            'TS5',
            'TS6',
            'TS7',
            'TS8',
            'TS9',
            'TS10',
            'TS11',
            'TS12',
            'TS13',
            'TS14',
            'TS15',
            'TS16',
            'TS17',
            'TS18',
            'TS19',
            'TS20',
            'TS21',
            'TS22',
            'TS23',
            'TS24',
            'TS25',
            'TS26',
            'TS27',
            'TS28',
            'TS29',
            'TS30',
            'TS31',
            'TS32',
            'created_at',
            'updated_at',
            'district_id',
            'dzongkhag_thromde'
        ];
    }

    public function title(): string
    {
        return ('SEN Teacher Data');
    }
}
