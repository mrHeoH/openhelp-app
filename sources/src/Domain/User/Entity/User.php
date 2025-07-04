<?php

namespace App\Domain\User\Entity;

use App\Domain\User\ValueObject\RoleCollection;

class User
{
    protected \DateTimeImmutable $createdAt;

    public function __construct(
        protected ?int $id = null,
        protected string $password = '',
        protected string $name = '',
        protected ?string $email = null,
        protected ?RoleCollection $roles = null,
        protected ?int $workspaceId = null
    )
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getRoles(): ?RoleCollection
    {
        return $this->roles;
    }

    public function setRoles(?RoleCollection $roles): void
    {
        $this->roles = $roles;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getWorkspaceId(): ?int
    {
        return $this->workspaceId;
    }

    public function setWorkspaceId(?int $workspaceId): void
    {
        $this->workspaceId = $workspaceId;
    }
}
