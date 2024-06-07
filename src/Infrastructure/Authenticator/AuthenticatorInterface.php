<?php

declare(strict_types=1);

use Security\UserInterface;

interface AuthenticatorInterface
{
    public function checkCode(UserInterface $user, string $code): bool;
}
