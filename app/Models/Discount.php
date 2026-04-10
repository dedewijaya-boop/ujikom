<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Carbon\Carbon;

class Discount extends Model
{
    protected $table = 'remises';
    public $incrementing = true;
    protected $keyType = 'int';

  
    protected $fillable = [
        'code',
        'montant_remise',
        'type',
        'date_expiration',
        'max_uses',
    ];

    protected $casts = [
        'date_expiration' => 'datetime',
    ];

    public function commandes(): HasMany
    {
        return $this->hasMany(Order::class, 'remise_id');
    }

    // Cleaned and unified isActive method
    public function isActive(): bool
    {
        // Check if expired
        if ($this->date_expiration && now()->gt($this->date_expiration)) {
            return false;
        }

        // Check usage limit
        
        return true;
    }
}

