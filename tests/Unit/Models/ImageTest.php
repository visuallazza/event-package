<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new Image($dataSet);
        $this->assertInstanceOf(Image::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [['name' => 'the-name']],
            'Medium Case' => [[
                'name' => 'the-title',
                'url' => 'the-url.de',
                'contact' => [
                    'name' => 'the-name',
                ],
            ], ],
        ];
    }
}
