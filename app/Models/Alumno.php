<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function notas(): HasMany
    {
        return $this->hasMany(Nota::class);
    }

    public function notas_por_criterios()
    {
        return $this->notas()
            ->select(DB::raw('alumno_id, ccee_id, max(nota) AS nota'))
            ->groupBy(['alumno_id', 'ccee_id'])
            ->get();
    }
}
