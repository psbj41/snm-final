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
            'area' => $row['areavenue'],
            'day' => $row['day'],
            'time' => $row['time'],
            'address' => $row['address'],
            'sector_sanyojak_name' => $row['sector_sanyojak_name'],
            'sector_sanyojak_contact' => $row['sector_sanyojak_contact'],
            'area_mukhi_1_name' => $row['area_mukhi_name_1'],
            'area_mukhi_1_contact' => $row['area_mukhi_contact_1'],
            'area_mukhi_2_name' => $row['area_mukhi_name_2'],
            'area_mukhi_2_contact' => $row['area_mukhi_contact_2'],
            'contact_person_1_name' => $row['contact_person_name_1'],
            'contact_person_1_contact' => $row['contact_person_contactmobile_no_1'],
            'contact_person_2_name' => $row['contact_person_name_2'],
            'contact_person_2_contact' => $row['contact_person_contactmobile_no_2'],
            'type_of_satsang' => $row['type_of_satsang'],
        ]);
    }
}
