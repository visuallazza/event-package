<?php

declare(strict_types=1);

namespace Events\Transport\Models;

use DateTime;
use DateTimeZone;
use Spatie\DataTransferObject\DataTransferObject;

class PointInTime extends DataTransferObject
{
    public int $timestamp;
    public DateTimeZone $dateTimeZone;
    public ?DateTime $dateTime;
}
