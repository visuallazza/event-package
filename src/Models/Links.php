<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Links extends DataTransferObject
{
    public string $page;
    public ?string $tickets;
}
