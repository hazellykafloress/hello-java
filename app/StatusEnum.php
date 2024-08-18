<?php

namespace App;

enum StatusEnum : string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case DELETED = 'deleted';
    case SUSPENDED = 'suspended';
}
