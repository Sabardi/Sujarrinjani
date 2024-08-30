<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'kategori_id', 'image'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'tours_id');
    }

    public function artikel()
    {
        return $this->hasOne(Artikel::class, 'tours_id');
    }
}

