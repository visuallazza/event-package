<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class GeoLocation extends DataTransferObject
{
    public string $latitude;
    public string $longitude;
}