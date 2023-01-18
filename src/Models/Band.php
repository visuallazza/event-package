<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Band extends DataTransferObject
{
    public string $name;
    public ?string $description;
    public ?Contact $contact;
}
