<?php

namespace Events\Transport\Models;

use DateTime;
use DateTimeZone;

class PointInTime
{
    public int $timestamp;
    public ?DateTime $dateTime;
    public ?DateTimeZone $dateTimeZone;
}
