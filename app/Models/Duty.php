<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dutydate',
        'satsangname',
        'SatsangAddress',
        'SatsangTime',
        'satsangcontact',
        'PracharakName',
        'PracharakContact',
        'SectorID',
        'BranchID',
        'Day',
        'Sangat_Day',
    ];
}
