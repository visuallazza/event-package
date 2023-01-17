<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Details extends DataTransferObject
{
    public ?string $description;
    public ?string $image;
}
