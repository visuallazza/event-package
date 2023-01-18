<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Event extends DataTransferObject
{
    public string $title;
    public ?string $subTitle;
    public ?string $description;
    public ?string $category;
    public ?Image $image;
    public Location $location;
    public PointInTime $pointInTime;
    public ?Band $band;
    public ?Links $links;
    public ?Contact $host;
    public ?Contact $organizer;
}
