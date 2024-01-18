<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CE extends Model
{
    use HasFactory;

    protected $table = 'ccee';

    public function notas(): HasMany
    {
        return $this->hasMany(Nota::class);
    }

}
