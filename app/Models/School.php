<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'dzongkhag_thromde',
        'school_name',
    ];

    public $timestamps = false;
}
