<?php

namespace App\Service\SimpleClass;
class MessageForMapper
{
    public function format(string $message): string
    {
        return strtoupper($message);
    }
}

