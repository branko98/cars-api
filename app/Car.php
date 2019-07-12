<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    const STORE_RULES = [
        'brand' => 'required',
        'model' => 'required',
        'year' => 'required',
        'maxSpeed' => 'integer|between:20,300',
        'isAutomatic' => 'required',
        'engine' => 'required',
        'numberOfDoors' => 'required|between:2,7',
    ];

    protected $fillable = [
        'brand',
        'model',
        'year',
        'maxSpeed',
        'isAutomatic',
        'engine',
        'numberOfDoors',
    ];
}
