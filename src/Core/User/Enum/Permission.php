<?php

declare(strict_types=1);

namespace App\Core\User\Enum;

use App\Core\Common\Enum\AbstractEnum;

class Permission extends AbstractEnum
{
    public const USER_CONTACT_CREATE = 'ROLE_USER_CONTACT_CREATE';
    public const USER_SHOW           = 'ROLE_USER_SHOW';
    public const USER_INDEX          = 'ROLE_USER_INDEX';
    public const USER_CREATE         = 'ROLE_USER_CREATE';
    public const USER_UPDATE         = 'ROLE_USER_UPDATE';
    public const USER_DELETE         = 'ROLE_USER_DELETE';
    public const USER_VALIDATION     = 'ROLE_USER_VALIDATION';

    public const PIZZA_SHOW = 'ROLE_PIZZA_SHOW';
    public const PIZZA_INDEX = 'ROLE_PIZZA_INDEX';
    public const PIZZA_CREATE = 'ROLE_PIZZA_CREATE';
    public const PIZZA_UPDATE = 'ROLE_PIZZA_UPDATE';
    public const PIZZA_DELETE = 'ROLE_PIZZA_DELETE';
}
