<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitCruise extends Model
{
    use HasFactory;

    protected $table = "unit_cruise";

    protected $fillable = [
        'name',
        'country',
        'city',
        'model',
        'manufacturer',
        'year',
        'capacity',
        'length',
        'rent',
        'rent_type',
        'cabins',
        'crew',
        'features',
        'details',
    ];

    public $timestamps = false;
}
