<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Band extends DataTransferObject
{
    public string $name;
    public ?string $description;
    public ?string $houseNumber;
    public ?string $addendum;
    public ?string $city;
    public ?string $zip;
    public ?string $region;
    public ?string $country;
}
