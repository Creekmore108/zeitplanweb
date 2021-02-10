<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    public $table = 'price';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    
}