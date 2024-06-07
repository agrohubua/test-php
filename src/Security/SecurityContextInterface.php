<?php

declare(strict_types=1);

namespace Security;

interface SecurityContextInterface
{
    public function authUser(string $username, string $password): UserInterface;
    public function getCurrentUser(): UserInterface;
}
