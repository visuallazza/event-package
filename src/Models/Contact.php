<?php

namespace Events\Transport\Models;

class Contact
{
    public string $name;
    public ?Address $address;
    public ?string $phone;
    public ?string $email;
    public ?Links $links;
}
