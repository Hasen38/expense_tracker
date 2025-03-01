<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
