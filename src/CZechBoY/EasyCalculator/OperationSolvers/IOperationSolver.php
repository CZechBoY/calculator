<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\OperationSolvers;

use CZechBoY\EasyCalculator\Entities\Numero;

interface IOperationSolver
{
    /**
     * @param Number $a
     * @param Number $b
     *
     * @return Number
     */
    public function solve(Numero $a, Numero $b): Numero;
}
