<?php declare(strict_types = 1);

require_once __DIR__ . '/../../bootstrap.php';

use CZechBoY\EasyCalculator\MathExpressions\AddMathExpression;
use CZechBoY\EasyCalculator\OperationSolvers\AddOperationSolver;
use CZechBoY\EasyCalculator\OperationSolvers\OperationSolverResolver;
use Tester\Assert;

class OperationSolverResolverTest extends BaseTestCase
{
    public function testResolvesAdd()
    {
        $resolver = new OperationSolverResolver();
        $expression = new AddMathExpression(i(1), i(2));

        Assert::type(AddOperationSolver::class, $resolver->getSolverForExpression($expression));
    }
}

(new OperationSolverResolverTest())->run();
