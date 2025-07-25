<?php

namespace App\Service\SimpleClass;

class ValidateEmail
{
    public function __invoke(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
