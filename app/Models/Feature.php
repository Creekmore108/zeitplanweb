<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    

    public $table = 'feature';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'feature_name',
        'plan_id',
        'feature_detail',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}


