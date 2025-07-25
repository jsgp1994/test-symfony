<?php

namespace App\Repository;


class UserRepository
{
    public function findUserById(int $id): array
    {
        return [
            'id' => $id,
            'name' => 'John Doe',
            'email' => 'hHb0m@example.com',
        ];
    }
}
