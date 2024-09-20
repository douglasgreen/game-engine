<?php

declare(strict_types=1);

namespace DouglasGreen\GameEngine;

/**
 * NOTE: This is too large and I need smaller settings.
 */
class Map extends Base
{
    public const TYPES = [
        'land',
        'desert',
        'mountain',
        'sea'
    ];

    // Size is given in 10x10 square miles.
    public int $length;

    public int $width;
}
