<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Event;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $this->assertInstanceOf(Event::class, new Event($dataSet));
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [
                [
                    'title' => 'the-title',
                    'location' => [
                        'name' => 'the-location',
                    ],
                    'pointInTime' => [
                        'timestamp' => 31415169,
                        'dateTimeZone' => new \DateTimeZone('Europe/Berlin'),
                    ],
                ],
            ],
            'Medium Case' => [
                [
                    'title' => 'the-title',
                    'subTitle' => 'the-subTitle',
                    'description' => 'the-description',
                    'image' => [
                        'name' => 'the-image',
                    ],
                    'location' => [
                        'name' => 'the-location',
                    ],
                    'pointInTime' => [
                        'timestamp' => 31415169,
                        'dateTimeZone' => new \DateTimeZone('Europe/Berlin'),
                    ],
                    'band' => [
                        'name' => 'the-location',
                    ],
                    'category' => 'the-category',
                    'links' => [
                        'page' => 'page.de',
                    ],
                    'host' => [
                        'name' => 'Host Name',
                    ],
                    'organizer' => [
                        'name' => 'Organizer Name',
                    ],
                ],
            ],
        ];
    }
}
