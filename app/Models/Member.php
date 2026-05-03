<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        
    'name',
    'age',
    'phone',
    'membership_type',
    'start_date',
    'end_date',
    'trainer_id'
];
    

    // Relationship: Member belongs to a Trainer
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}