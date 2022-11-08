<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Links extends DataTransferObject
{
    public string $page;
    public ?string $tickets;
    public ?string $image;
}
