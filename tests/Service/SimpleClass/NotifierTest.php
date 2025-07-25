<?php

namespace Tests\Service\SimpleClass;

use App\Service\SimpleClass\MessageForMapper;
use App\Service\SimpleClass\Notifier;
use PHPUnit\Framework\TestCase;

class NotifierTest extends TestCase
{

    public function testNotifier(): void
    {
        $messageForMapper = new MessageForMapper();
        $notifier = new Notifier($messageForMapper);
        $response = $notifier->notify('hello world');
        $this->assertEquals('HELLO WORLD', $response);
    }

}