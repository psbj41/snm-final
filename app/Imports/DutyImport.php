<?php

namespace App\Imports;

use App\Models\Duty;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DutyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Duty([
        'Dutydate' => $row['dutydate'],
        'satsangname' => $row['satsangname'],
        'SatsangAddress' => $row['satsangaddress'],
        'SatsangTime' => $row['satsangtime'],
        'satsangcontact' => $row['satsangcontact'],
        'PracharakName' => $row['pracharakname'],
        'PracharakContact' => $row['pracharakcontact'],
        'SectorID' => $row['sectorid'],
        'BranchID' => $row['branchid'],
        'Day' => $row['day'],
        'Sangat_Day' => $row['sangat_day'],
        ]);
    }
}
