<?php

namespace Events\Transport\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Contact extends DataTransferObject
{
    public string $name;
    public ?Address $address;
    public ?string $phone;
    public ?string $email;
    public ?Links $links;
}
