<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\PointInTime;
use PHPUnit\Framework\TestCase;

class PointInTimeTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new PointInTime($dataSet);
        $this->assertInstanceOf(PointInTime::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [
                [
                    'timestamp' => 314159,
                    'dateTimeZone' => new \DateTimeZone('Europe/Berlin'),
                ],
            ],
            'Medium Case' => [
                [
                    'timestamp' => 314159,
                    'dateTime' => new \DateTime(),
                    'dateTimeZone' => new \DateTimeZone('Europe/Berlin'),
                ],
            ],
        ];
    }
}
