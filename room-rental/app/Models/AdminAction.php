<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ this is required
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminAction extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id', 'action_type', 'description', 'timestamp'];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}