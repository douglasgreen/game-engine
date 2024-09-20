<?php

declare(strict_types=1);

namespace DouglasGreen\GameEngine;

class Place extends Base
{
    // Size is given in feet.
    public int $length;

    public int $width;

    public ?int $height = null;
}
