<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'type',
        'user_id',
    ];

    /**
     * Get the user associated with the alert.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
