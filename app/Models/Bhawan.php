<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bhawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'day',
        'time',
        'address',
        'sector_sanyojak_name',
        'sector_sanyojak_contact',
        'area_mukhi_1_name',
        'area_mukhi_1_contact',
        'area_mukhi_2_name',
        'area_mukhi_2_contact',
        'contact_person_1_name',
        'contact_person_1_contact',
        'contact_person_2_name',
        'contact_person_2_contact',
        'type_of_satsang',
    ];
}
