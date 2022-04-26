<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dutydate1',
        'SatsangID',
        'satsangname',
        'SatsangAddress',
        'SatsangTime',
        'satsangcontact',
        'PracharakID',
        'PracharakName',
        'PracharakContact',
        'SectorID',
        'BranchID',
        'Day',
        'Sangat_Day',
        'Dutydate',
        'Satsang_Type',
    ];
}
