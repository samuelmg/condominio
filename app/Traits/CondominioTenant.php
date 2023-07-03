<?php

namespace App\Traits;

use App\Models\Condominio;
use App\Models\Scopes\CondominioScope;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CondominioTenant
{
    protected static function bootCondominioTenant(): void
    {
        static::addGlobalScope(new CondominioScope);

        static::creating(function($model) {
            if (empty($model->condominio)) {
                $model->condominio_id = session('condominio_id');
            }
        });
    }

    /**
     * Get the condominio that owns the model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function condominio(): BelongsTo
    {
        return $this->belongsTo(Condominio::class);
    }
}
