<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new Address($dataSet);
        $this->assertInstanceOf(Address::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [
                [
                    'street' => 'the-street',
                    'houseNumber' => 'the-houseNumber',
                    'city' => 'the-city',
                    'zip' => 'the-zip',
                ],
            ],
            'Medium Case' => [
                [
                    'street' => 'the-street',
                    'houseNumber' => 'the-houseNumber',
                    'city' => 'the-city',
                    'zip' => 'the-zip',
                    'addendum' => 'the-addendum',
                    'region' => 'the-region',
                    'country' => 'the-country',
                    'geoLocation' => [
                        'latitude' => 3.1415,
                        'longitude' => 2.3789,
                    ],
                ],
            ],
        ];
    }
}
