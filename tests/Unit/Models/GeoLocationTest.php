<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\GeoLocation;
use PHPUnit\Framework\TestCase;

class GeoLocationTest extends TestCase
{
    public function testCreate(): void
    {
        $band = new GeoLocation([
            'latitude' => 3.1415,
            'longitude' => 3.1415,
        ]);
        $this->assertInstanceOf(GeoLocation::class, $band);
    }
}
