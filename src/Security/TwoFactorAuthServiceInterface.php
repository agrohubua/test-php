<?php

declare(strict_types=1);

namespace Security;

interface TwoFactorAuthServiceInterface
{
    public function send2FACode(UserInterface $user): void;
    public function verifyUser(UserInterface $user, string $firewallName): bool;
}
