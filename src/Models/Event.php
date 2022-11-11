<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Event extends DataTransferObject
{
    public string $title;
    public ?string $subTitle;
    public Location $location;
    public int $timestamp;
    public ?Band $band;
    public ?string $category;
    public ?string $description;
    public ?Links $links;
    public ?Contact $host;
    public ?Contact $organizer;
}
