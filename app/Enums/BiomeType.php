<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static tropical()
 * @method static static city()
 * @method static static desert()
 * @method static static arctic()
 * @method static static aquatic()
 * @method static static mountains()
 * @method static static forest()
 * @method static static unknown()
 */
final class BiomeType extends Enum
{
    const TROPICAL = 0;
    const CITY = 1;
    const DESERT = 2;
    const ARCTIC = 3;
    const AQUATIC = 4;
    const MOUNTAINS = 5;
    const FOREST = 6;
    const UNKNOWN = 7;
}
