<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'student_name',
        'contact',
        'schedule_days',
        'schedule_time',
        'payment_date',
        'is_active',
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
