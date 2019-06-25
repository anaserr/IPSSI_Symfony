<?php

declare(strict_types=1); // reponder au exigence php7

namespace App\Service;

class Calculator 
{
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}
