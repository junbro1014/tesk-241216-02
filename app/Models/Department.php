<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Department extends Model
{
    protected $guarded = [];

    public function Division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
