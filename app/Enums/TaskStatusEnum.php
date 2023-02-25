<?php

namespace App\Enums;

enum TaskStatusEnum: int
{
    case STATUS_PROGRESS = 0;
    case STATUS_DONE = 1;
    case STATUS_HIDDEN = 2;
}
