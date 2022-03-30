<?php

namespace App\Imports;

use App\Models\Thought;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ThoughtImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row['thought'])) {
            return null;
        }

        return new Thought([
            'thought' => $row['thought']
        ]);
    }
}
