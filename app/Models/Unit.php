<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table = "unit";

    protected $fillable = [
        'name',
        'country',
        'city',
        'model',
        'manufacture',
        'year',
        'capacity',
        'driver' ,
        'rent',
        'rent_type',
        'images',
        'features',
        'details',
        'status',
    ];

    public $timestamps = false;
}
