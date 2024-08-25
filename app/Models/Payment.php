<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nasabah_name','name','norek'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'payment_id');
    }
}
