<?php

namespace App\Enums;

enum TaskStatus: String
{
    case TO_DO = 'To Do';
    case IN_PROGRESS = 'In Progress';
    case COMPLETED = 'Completed';
}
