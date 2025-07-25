<?php

namespace App\Service\SimpleClass;

class Notifier
{
    public function __construct(private MessageForMapper $messageForMapper){}

    public function notify(string $message): string
    {
        return $this->messageForMapper->format($message);
    }
}