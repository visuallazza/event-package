<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Links;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new Links($dataSet);
        $this->assertInstanceOf(Links::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [['page' => 'the-page.de']],
            'Medium Case' => [[
                'page' => 'the-page.de',
                'tickets' => 'the-tickets-url.de',
            ], ],
        ];
    }
}
