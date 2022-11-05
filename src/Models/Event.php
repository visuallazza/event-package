<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Event extends DataTransferObject
{
    public string $title;
    public Location $location;
    public ?Band $band;
    public int $timestamp;
    public ?string $category;
}
