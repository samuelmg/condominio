<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises';
    public $timestamps = false;

    public function estados(): HasMany
    {
        return $this->hasMany(Estado::class);
    }
}
