<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    /**
     * Get all of the userItems for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userItems(): HasMany
    {
        return $this->hasMany(UserItem::class, 'foreign_key', 'local_key');
    }
}
