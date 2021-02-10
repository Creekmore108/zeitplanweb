<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    
    public $table = 'faq';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'answer',
        'question',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
