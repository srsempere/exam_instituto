<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nota extends Model
{
    use HasFactory;

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class);
    }

    public function CE(): BelongsTo
    {
        return $this->belongsTo(CE::class);
    }
}
