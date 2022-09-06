<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'passport_number',
        'phone_number',
        'subject',
        'description',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
