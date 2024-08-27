<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $dates = ['arrival_date', 'pickup_time']; // Automatically cast these attributes to Carbon instances
    protected $fillable = [
        'tours_id',
        'fullName',
        'email',
        'pasport_number',
        'nationality',
        'total_participan',
        'arrival_date',
        'pickup_time',
        'pickup_location',
        'add_message'];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tours_id');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'bookings_id');
    }
}
