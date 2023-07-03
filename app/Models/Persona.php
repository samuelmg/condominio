<?php

namespace App\Models;

use App\Traits\CondominioTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Persona extends Model
{
    use HasFactory;
    use CondominioTenant;
    protected $fillable = ['nombre', 'tel_celular', 'tel_fijo'];

    public function viviendas(): BelongsToMany
    {
        return $this->belongsToMany(Vivienda::class)->withPivot('tipo');
    }
}
