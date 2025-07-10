<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'bill_type',
        'amount',
        'due_date',
        'is_paid',
    ];
}