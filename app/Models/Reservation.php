<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
   protected $table = "reservations";
   protected $fillables=[
        'name',
        'phone',
        'quantity',
        'totalPrice',
        'user_id',
        'trip_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
}
