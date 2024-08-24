<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitFlight extends Model
{
    use HasFactory;

    protected $table = "unit_flight";

    protected $fillable = [
        'name',
        'country',
        'city',
        'airline',
        'since',
        'toward',
        'duration',
        'stops',
        'departure_date',
        'return_day',
        'class',
        'price',
        'aircraft',
        'features',
        'details',
    ];

    public $timestamps = false;
}
