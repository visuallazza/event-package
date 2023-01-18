<?php

declare(strict_types=1);

namespace Unit\Models;

use Events\Transport\Models\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    /** @dataProvider createProvider */
    public function testCreate(array $dataSet): void
    {
        $band = new Contact($dataSet);
        $this->assertInstanceOf(Contact::class, $band);
    }

    public function createProvider(): array
    {
        return [
            'Minimal Case' => [
                ['name' => 'the-name'],
            ],
            'Medium Case' => [
                [
                    'name' => 'the-name',
                    'address' => [
                        'name' => 'the-contact-name',
                        'street' => 'the-street',
                        'houseNumber' => 'the-houseNumber',
                        'city' => 'the-city',
                        'zip' => 'the-zip',
                    ],
                    'phone' => 'the-phone',
                    'email' => 'the-email',
                    'links' => [
                        'page' => 'the-page',
                    ],
                ], ],
        ];
    }
}
