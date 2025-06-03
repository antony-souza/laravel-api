<?php

namespace App\Enums;

enum UserTypeEnum: string
{
    case ADMIN = 'ADMIN';
    case COLLABORATOR = 'COLLABORATOR';
    case CUSTOMER = 'CUSTOMER';
}