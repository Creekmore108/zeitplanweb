<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{

    public $table = 'amenity';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    
}