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
        'dutydate' => $row['dutydate'],
        'name' => $row['satsangname'],
        'address' => $row['satsangaddress'],
        'time' => $row['satsangtime'],
        'contact' => $row['satsangcontact'],
        'pracharak_name' => $row['pracharakname'],
        'pracharak_contact' => $row['pracharakcontact'],
        ]);
    }
}
