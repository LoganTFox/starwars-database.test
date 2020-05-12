<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static small()
 * @method static static medium()
 * @method static static large()
 * @method static static unknown()
 */
final class PlanetSize extends Enum
{
    const SMALL = 0;
    const MEDIUM = 1;
    const LARGE = 2;
    const UNKNOWN = 3;
}
