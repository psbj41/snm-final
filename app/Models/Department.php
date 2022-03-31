<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Department extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name'
    ];

    protected $appends = ['departmentpdf'];

    public function getDepartmentpdfAttribute()
    {
        return $this->getMedia('departmentpdf')->first()->getUrl();
    }
}
