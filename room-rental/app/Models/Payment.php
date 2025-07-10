<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'rental_id',
        'bill_id',
        'amount',
        'payment_method',
        'payment_date',
        'notes',
        'receipt_url'
    ];

    public function rental(): BelongsTo
    {
        return $this->belongsTo(Rental::class);
    }

    public function bill(): BelongsTo
    {
        return $this->belongsTo(UtilityBill::class, 'bill_id');
    }
}