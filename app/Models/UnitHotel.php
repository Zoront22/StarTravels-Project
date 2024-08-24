<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitHotel extends Model
{
    use HasFactory;

    protected $table = "unit_hotel";

    protected $fillable = [
        'type',
        'room',
        'ac',
        'meal',
        'cancellation_charges',
        'capacity',
        'phone',
        'rent',
        'details',
    ];

    public $timestamps = false;
}
