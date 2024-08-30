<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'tours_id',
        'quote',
        'itinerary',
        'day1_image',
        'paragrap1_day1',
        'paragrap2_day1',
        'day2_image',
        'paragrap1_day2',
        'paragrap2_day2',
        'day3_image',
        'paragrap1_day3',
        'paragrap2_day3',
        'day4_image',
        'paragrap1_day4',
        'paragrap2_day4',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tours_id');
    }
}
