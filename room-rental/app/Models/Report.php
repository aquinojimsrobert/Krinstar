<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ this is required
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory; // ✅ this enables factory()

    protected $fillable = ['user_id', 'unit_id', 'message', 'status'];

    public function rental(): BelongsTo
    {
        return $this->belongsTo(Rental::class);
    }
}