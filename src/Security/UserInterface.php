<?php

declare(strict_types=1);

namespace Security;

use Security\Enum\TwoFaTypeEnum;

interface UserInterface
{
    public function get2FaType(): TwoFaTypeEnum;
}
