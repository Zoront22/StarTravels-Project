<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitTour extends Model
{
    use HasFactory;

    protected $table = "unit_tour";

    protected $fillable = [
        'name',
        'country',
        'city',
        'seats',
        'duration',
        'price',
        'embed',
        'details',
        'status',
    ];

    public $timestamps = false;
}
