<?php

namespace app\Enum;

enum simple: int {
    case APPROVED = 0;
    case DELETED = 1;
    case SUSPENDED = 2;
}