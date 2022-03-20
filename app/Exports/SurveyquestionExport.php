<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class SurveyquestionExport implements FromCollection, WithHeadings, WithTitle
{
    public function collection()
    {
        $data = DB::table('surveyquestions')
            ->leftJoin('respondents', 'surveyquestions.respondent_id', '=', 'respondents.respondent_id')
            ->select('id', 'respondent', 'question_no', 'item_details', 'response', 'item_no')
            ->get();

        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'respondent_id',
            'question_no',
            'item_details',
            'response',
            'item_no',
        ];
    }

    public function title(): string
    {
        return ('Survey Questions');
    }
}
