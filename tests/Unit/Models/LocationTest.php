<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Location;
use PHPUnit\Framework\TestCase;

class LocationTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new Location($dataSet);
        $this->assertInstanceOf(Location::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [
                [
                    'name' => 'the-name',
                ],
            ],
            'Medium Case' => [
                [
                    'name' => 'the-name',
                    'description' => 'the-description',
                    'contact' => [
                        'name' => 'the-contact-name',
                    ],
                    'links' => [
                        'page' => 'the-page.de',
                    ],
                ],
            ],
        ];
    }
}
