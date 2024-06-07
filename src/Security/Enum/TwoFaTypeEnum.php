<?php

declare(strict_types=1);

namespace Security\Enum;

enum TwoFaTypeEnum: string
{
    case SMS = 'sms';
    case AUTH_APP = 'auth_app';
    case CODE = 'code';
}
