<?php

namespace App\Traits;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(function ($model) {
            if ($model->applyUuid()) {
                $model->uuid = Str::uuid()->toString();
            } else {
                return;
            }
        });
    }

    public function applyUuid(): bool
    {
        return true;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function scopeByUuid($query, $uuid): Builder
    {
        return $query->where('uuid', '=', $uuid);
    }

    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
}
