<?php

use App\Service\SimpleClass\ValidateEmail;
use PHPUnit\Framework\TestCase;

class ValidateEmailTest extends TestCase
{

    public function testValidateEmail(): void
    {
        $email = 'Hola@gmail.com';
        $validateEmail = new ValidateEmail();
        $validate = $validateEmail($email);

        $this->assertTrue($validate, 'El email debe ser válido');
    }
}
