<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_date',
        'total_amount'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
