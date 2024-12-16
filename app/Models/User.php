<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    protected $guarded = [];

    public function Team(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
