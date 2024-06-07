<?php

declare(strict_types=1);

namespace Security;

use Iterator;
use Security\Enum\TwoFaTypeEnum;

interface UserInterface
{
    public function getPhone(): string;
    public function getAuthCodes(): Iterator;
    public function get2FaType(): TwoFaTypeEnum;
}
