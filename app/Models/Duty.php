<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    use HasFactory;
    protected $fillable = [
        'dutydate',
        'name',
        'address',
        'time',
        'contact',
        'pracharak_name',
        'pracharak_contact',
    ];
}
