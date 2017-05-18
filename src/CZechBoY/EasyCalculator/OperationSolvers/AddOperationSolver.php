<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\OperationSolvers;

use CZechBoY\EasyCalculator\Entities\Numero;

final class AddOperationSolver implements IOperationSolver
{
    /**
     * @param Numero $a
     * @param Numero $b
     *
     * @return Number
     */
    public function solve(Numero $a, Numero $b): Numero
    {
        if ($a->isInteger() && $b->isInteger()) {
            return Numero::fromInteger($a->getNumber() + $b->getNumber());
        }

        return Numero::fromFloat($a->getNumber() + $b->getNumber());
    }
}
