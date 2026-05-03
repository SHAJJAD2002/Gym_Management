<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = [
        'name',
        'specialization',
        'phone',
        'experience'
    ];

    // Relationship: Trainer has many Members
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}