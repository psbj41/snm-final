<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Guideline extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['name'];

    protected $appends = ['guidelinepdf'];

    public function getGuidelinepdfAttribute()
    {
        return $this->getMedia('guidelinepdf')->first()->getUrl();
    }
}
