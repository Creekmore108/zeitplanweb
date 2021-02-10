<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    public $table = 'setting';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'key',
        'value',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
