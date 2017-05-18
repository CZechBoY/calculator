<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\OperationSolvers;

use CZechBoY\EasyCalculator\MathExpressions\AddMathExpression;
use CZechBoY\EasyCalculator\MathExpressions\MathExpression;

class OperationSolverResolver
{
    /**
     * @param MathExpression $mathExpression
     *
     * @return IOperationSolver
     * @throws SolverNotFoundException
     */
    public function getSolverForExpression(MathExpression $mathExpression): IOperationSolver
    {
        if ($mathExpression instanceof AddMathExpression) {
            return new AddOperationSolver();
        }

        throw new SolverNotFoundException($mathExpression);
    }
}
