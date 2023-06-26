<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vivienda extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'estatus', 'notas'];

    function condominio() : BelongsTo {
        return $this->belongsTo(Condominio::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}