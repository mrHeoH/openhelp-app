<?php

namespace App\Domain\User\Repository;

use App\Domain\User\Entity\User;

interface UserRepositoryInterface
{
    public function findOneById(int $id): ?User;

    public function findOneByEmail(string $email): ?User;

    public function save(User $user): void;

    public function delete(User $user): void;
}
