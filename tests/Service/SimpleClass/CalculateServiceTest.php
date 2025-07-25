<?php

namespace App\Tests\Service\SimpleClass;

use App\Service\SimpleClass\CalculateService;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculateServiceTest extends TestCase
{

    #[DataProvider('data')]
    public function testSumNumberWithDataProvider($a, $b, $expected): void
    {
        $calculateService = new CalculateService();
        $response = $calculateService->sumNumber($a, $b);
        $this->assertEquals($expected, $response);
    }

    public static function data(): array
    {
        return [
            "Sumatoria normal" => [1, 2, 3],
            "Sumatoria negativa" => [5, -5, 0],
            "otra suma" => [0, 0, 0],
        ];
    }

}
