<?php

namespace App\Repository\Users;

interface UsersRepository
{
    public function create(array $data): void;
    public function update(array $data): void;
}