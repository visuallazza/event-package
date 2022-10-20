<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Event extends DataTransferObject
{
    public string $title;
    public string $location;
    public int $datetime;
    public string $category;
}
