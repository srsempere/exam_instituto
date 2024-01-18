<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function notas(): HasMany
    {
        return $this->hasMany(Nota::class);
    }
}
