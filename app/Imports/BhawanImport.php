<?php

namespace App\Imports;

use App\Models\Bhawan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BhawanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bhawan([
            'SatsangID' => $row['satsangid'],
            'SatsangName' => $row['satsangname'],
            'SatsangAddress' => $row['satsangaddress'],
            'SatsangContact' => $row['satsangcontact'],
            'Day' => $row['day'],
            'Time' => $row['time'],
            'Area' => $row['area'],
            'BranchID' => $row['branchid'],
            'IsActive' => $row['isactive'],
            'Satsang_Time_Type' => $row['satsang_time_type'],
            'SequenceID' => $row['sequenceid'],
        ]);
    }
}
