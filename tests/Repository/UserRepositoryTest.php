<?php

namespace App\Tests\Repository;

use App\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testFindUserById(): void
    {

        /*$repo = $this->getMockBuilder(UserRepository::class)
            ->onlyMethods(['findUserById'])
            ->getMock();*/


        $repo = $this->createMock(UserRepository::class);

        $repo->method('findUserById')->willReturn([
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'hHb0m@example.com',
        ]);

        $response = $repo->findUserById(1);

        $this->assertArrayHasKey('id', $response);
        $this->assertArrayHasKey('name', $response);
    }

}
