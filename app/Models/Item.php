<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class, 'foreign_key', 'local_key');
    }
}
