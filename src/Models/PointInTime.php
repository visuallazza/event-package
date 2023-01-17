<?php

namespace Events\Transport\Models;

use DateTime;
use DateTimeZone;
use Spatie\DataTransferObject\DataTransferObject;

class PointInTime extends DataTransferObject
{
    public int $timestamp;
    public ?DateTime $dateTime;
    public ?DateTimeZone $dateTimeZone;
}
