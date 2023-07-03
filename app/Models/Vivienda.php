<?php

namespace App\Models;

use App\Traits\CondominioTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vivienda extends Model
{
    use HasFactory;
    use CondominioTenant;
    protected $fillable = ['numero', 'estatus', 'notas'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function personas(): BelongsToMany
    {
        return $this->belongsToMany(Persona::class)->withPivot('tipo');
    }
}
