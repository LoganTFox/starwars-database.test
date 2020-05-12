<?php

namespace App;

use App\Enums\BiomeType;
use App\Enums\PlanetSize;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use CastsEnums;

    protected $fillable = [
        'name',
        'description',
        'biome_type',
        'size',
    ];

    public $enumCasts = [
        'biome_type' => BiomeType::class,
        'size' => PlanetSize::class,
    ];

    protected $casts = [
        'biome_type' => 'int',
        'size' => 'int',
    ];
}
