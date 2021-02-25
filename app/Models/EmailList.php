<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailList extends Model
{
    public $table = 'email_list';
    
    public $fillable = ['email'];
}
