<?php

namespace App\Tests\Service\SimpleClass;

use App\Service\SimpleClass\CalculateService;
use PHPUnit\Framework\TestCase;

class CalculateServiceTest extends TestCase
{

    public function testSumNumber(): void
    {
        $a = 5;
        $b = 10;

        $calculateService = new CalculateService();
        $response = $calculateService->sumNumber($a, $b);
        $this->assertEquals(15, $response);
    }

}
