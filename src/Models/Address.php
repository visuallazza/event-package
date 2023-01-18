<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Address extends DataTransferObject
{
    public string $street;
    public string $houseNumber;
    public string $city;
    public string $zip;
    public ?string $addendum;
    public ?string $region;
    public ?string $country;
    public ?GeoLocation $geoLocation;
}
