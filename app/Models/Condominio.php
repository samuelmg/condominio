<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Condominio extends Model
{
    use HasFactory;
    protected $fillable = [
        'condominio',
        'pais_id',
        'estado_id',
        'municipio_id',
        'localidad',
        'colonia',
        'calle',
        'numero',
        'cp',
    ];

    public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class);
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }

    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('roel');
    }

    public function viviendas(): HasMany
    {
        return $this->hasMany(Vivienda::class);
    }
}
