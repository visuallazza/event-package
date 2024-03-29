<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Band;
use PHPUnit\Framework\TestCase;

class BandTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new Band($dataSet);
        $this->assertInstanceOf(Band::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [['name' => 'the-title']],
            'Medium Case' => [[
                'name' => 'the-title',
                'description' => 'the-description',
                'contact' => [
                    'name' => 'the-name',
                ],
            ], ],
        ];
    }
}
