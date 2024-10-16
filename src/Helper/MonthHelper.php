<?php

declare(strict_types=1);

namespace App\Helper;

use App\Exception\InvalidMonthException;

class MonthHelper
{
    /**
     * @throws InvalidMonthException
     */
    public static function getMonthTitleByCode(int $code): string
    {
        return match ($code) {
            1 => 'Январь',
            2 => 'Февраль',
            3 => 'Март',
            4 => 'Апрель',
            5 => 'Май',
            6 => 'Июнь',
            7 => 'Июль',
            8 => 'Август',
            9 => 'Сентябрь',
            10 => 'Октябрь',
            11 => 'Ноябрь',
            12 => 'Декабрь',
            default => throw new InvalidMonthException(),
        };
    }
}