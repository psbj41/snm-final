<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row['pracharakcontact'])) {
            return null;
        }

        return new User([
            'PracharakID' => $row['pracharakid'],
            'name' => $row['pracharakname'],
            'Gyan_Pracharak' => $row['gyan_pracharak'],
            'phone' => $row['pracharakcontact'],
            'Email_ID' => $row['email_id'],
            'Gender' => $row['gender'],
            'Area' => $row['area'],
            'BranchID' => $row['branchid'],
            'General_Satsang' => $row['general_satsang'],
            'Nari_Satsang' => $row['nari_satsang'],
            'Sector_Sanyojak' => $row['sector_sanyojak'],
            'Area_Mukhi_Branch_Incharge' => $row['area_mukhi_branch_incharge'],
            'Sewadal_Sanchalak' => $row['sewadal_sanchalak'],
            'K_Sanchalak' => $row['k_sanchalak'],
            'password' => Hash::make('123456789'),
        ]);
    }
}
