<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    public $table = 'plan';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'plan_name',
        'base_price',
        'user_price',
        'description',
        'min',
        'max',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    
}