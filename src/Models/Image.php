<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Image extends DataTransferObject
{
    public string $name;
    public ?string $url;
    public ?string $content;
}
