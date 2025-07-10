<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory; // ✅ MUST be inside the class

    protected $fillable = [
        'user_id',
        'unit_id',
        'start_date',
        'end_date',
    ];
}