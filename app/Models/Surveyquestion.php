<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surveyquestion extends Model
{
    protected $fillable = [
        'respondent_id',
        'question_no',
        'item_details',
        'response',
        'response_type',
        'item_no',
        'mandatory',
        'respondent_sub_category',
        'respondent_sub_category_option',
    ];
}
