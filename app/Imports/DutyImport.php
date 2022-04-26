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
            'Dutydate1' => $row['dutydate1'],
            'SatsangID' => $row['satsangid'],
            'satsangname' => $row['satsangname'],
            'SatsangAddress' => $row['satsangaddress'],
            'SatsangTime' => $row['satsangtime'],
            'satsangcontact' => $row['satsangcontact'],
            'PracharakID' => $row['pracharakid'],
            'PracharakName' => $row['pracharakname'],
            'PracharakContact' => $row['pracharakcontact'],
            'SectorID' => $row['sectorid'],
            'BranchID' => $row['branchid'],
            'Day' => $row['day'],
            'Sangat_Day' => $row['sangat_day'],
            'Dutydate' => $row['dutydate'],
            'Satsang_Type' => $row['satsang_type'],
        ]);
    }
}
