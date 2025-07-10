<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_id',
        'unit_number',
        'floor',
        'description',
        'monthly_rent',
        'is_occupied',
    ];
}