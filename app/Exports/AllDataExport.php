<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class AllDataExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        $sheets = [];

        $sheets[] = new PrincipalsExport();
        $sheets[] = new CounsellorsExport();
        $sheets[] = new TeachersExport();
        $sheets[] = new TeachersensExport();
        $sheets[] = new StudentsExport();
        $sheets[] = new SurveyquestionExport();

        return $sheets;
    }
}
