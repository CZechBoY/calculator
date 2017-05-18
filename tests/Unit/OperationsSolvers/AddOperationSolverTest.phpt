<?php declare(strict_types = 1);

require_once __DIR__ . '/../../bootstrap.php';

use CZechBoY\EasyCalculator\OperationSolvers\AddOperationSolver;
use Tester\Assert;

final class AddOperationSolverTest extends BaseTestCase
{
    public function testIntegers()
    {
        $operation = new AddOperationSolver();

        Assert::same(2, $operation->solve(i(1), i(1))->getNumber());
        Assert::same(5, $operation->solve(i(0), i(5))->getNumber());

        Assert::same(-5, $operation->solve(i(2), i(-7))->getNumber());
        Assert::same(0, $operation->solve(i(7), i(-7))->getNumber());
    }

    public function testFloats()
    {
        $operation = new AddOperationSolver();

        Assert::same(2.0, $operation->solve(f(1.0), f(1.0))->getNumber());
        Assert::same(5.0, $operation->solve(f(0.5), f(4.5))->getNumber());

        Assert::same(-5.0, $operation->solve(f(2.6), f(-7.6))->getNumber());
        Assert::same(0.0, $operation->solve(f(7.7), f(-7.7))->getNumber());
    }
}

(new AddOperationSolverTest())->run();
