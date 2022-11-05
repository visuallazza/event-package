<?php

namespace Unit\Models;

use Events\Transport\Models\Band;
use PHPUnit\Framework\TestCase;

class BandTest extends TestCase
{
    public function testCreate(): void
    {
        $band = new Band([
            'name' => 'the-title',
        ]);

        $this->assertInstanceOf(Band::class, $band);
        $this->assertEquals('', $band->description);
        $this->assertNull($band->description);
    }
}
