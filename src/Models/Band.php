<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Band extends DataTransferObject
{
    public string $name;
    public ?string $description;
    public ?Contact $contact;
}
