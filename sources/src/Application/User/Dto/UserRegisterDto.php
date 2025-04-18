<?php

namespace App\Application\User\Dto;

readonly class UserRegisterDto
{
    public function __construct(
        public string $login,
        public string $password,
        public string $name,
        public string $email,
    ) {
    }
}
