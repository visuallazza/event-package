<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class GeoLocation extends DataTransferObject
{
    public float $latitude;
    public float $longitude;
}
