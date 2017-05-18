<?php declare(strict_types = 1);

use CZechBoY\EasyCalculator\Entities\Numero;

/**
 * @param int $n
 *
 * @return Numero
 */
function i(int $n): Numero
{
    return Numero::fromInteger($n);
}

/**
 * @param float $n
 *
 * @return Numero
 */
function f(float $n): Numero
{
    return Numero::fromFloat($n);
}