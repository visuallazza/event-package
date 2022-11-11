<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Location extends DataTransferObject
{
    public string $name;
    public ?string $description;
    public ?Contact $contact;
    public ?Links $links;
}
