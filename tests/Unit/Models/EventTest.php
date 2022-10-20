<?php

namespace Tests\Unit;

use Events\Transport\Models\Event;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    public function testCreate(): void
    {
        $this->assertInstanceOf(Event::class, new Event([
            'title' => 'the-title',
            'location' => 'the-location',
            'datetime' => 31415,
            'category' => 'the-category',
        ]));
    }
}