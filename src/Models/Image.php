<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Image extends DataTransferObject
{
    public string $name;
    public ?string $url;
    public ?string $content;
}
