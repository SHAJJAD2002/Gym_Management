<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //class Member extends Model

    public $fillable = [
        'name',
        'age',
        'phone',
        'membership_type',
        'start_date',
        'end_date'
    ];
}

