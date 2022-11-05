<?php

namespace Events\Transport\Models;

class Address
{
    public string $street;
    public ?string $houseNumber;
    public string $city;
    public string $zip;
    public ?string $addendum;
    public ?string $region;
    public ?string $country;
}
