<?php

declare(strict_types=1);

use Security\SecurityContextInterface;
use Security\TwoFactorAuthServiceInterface;

class UserController
{
    public function __construct(
        readonly private TwoFactorAuthServiceInterface $twoFactorAuthService,
        readonly private SecurityContextInterface $securityContext
    ){
    }

    public function authAction(string $username, string $password): string
    {
        if ($currentUser = $this->securityContext->authUser($username, $password)) {
            $this->twoFactorAuthService->send2FACode($currentUser);

            return 'OK';
        }

        return 'FAILED';
    }


    public function auth2FACheckAction(string $code): string
    {
        $currentUser = $this->securityContext->getCurrentUser();

        if ($this->twoFactorAuthService->verifyUser($currentUser, $code)) {
            return 'OK';
        }

        return 'FAILED';
    }
}
