<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Special extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'ssn',
        'snp',
        'snm',
        'snss',
        'snsd',
        'snks',
        'sngp'
    ];

    protected $appends = ['specialpdf'];

    public function getSpecialpdfAttribute()
    {
        return $this->getMedia('specialpdf')->first()->getUrl();
    }
}
