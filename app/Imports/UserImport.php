<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        if (!isset($row['contact'])) {
            return null;
        }
        
        return new User([
            'name' => $row['name'],
            'phone' => $row['contact'],
            'email_address' => $row['email_id'],
            'gender' => $row['gender'],
            'address' => $row['address'],
            'area' => $row['area'],
            'gyan_pracharak' => $row['gyan_pracharak_yesno'],
            'administration' => $row['administration_yesno'],
            'designation' => $row['designation'],
            'responsibilities' => $row['responsibilities'],
            'password' => Hash::make('123456789'),
        ]);
    }
}
