<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bhawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'SatsangID',
        'SatsangName',
        'SatsangAddress',
        'SatsangContact',
        'Day',
        'Time',
        'Area',
        'BranchID',
        'IsActive',
        'Satsang_Time_Type',
        'SequenceID',
    ];
}
