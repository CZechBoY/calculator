<?php declare(strict_types = 1);

require_once __DIR__ . '/../../bootstrap.php';

use CZechBoY\EasyCalculator\Entities\Numero;
use CZechBoY\EasyCalculator\MathExpressions\AddMathExpression;
use Tester\Assert;

class AddMathExpressionTest extends BaseTestCase
{
    public function testStoreBothNumbers()
    {
        $addMathExpression = new AddMathExpression(i(9), i(99));

        Assert::type(Numero::class, $addMathExpression->getA());
        Assert::same(9, $addMathExpression->getA()->getNumber());

        Assert::type(Numero::class, $addMathExpression->getB());
        Assert::same(99, $addMathExpression->getB()->getNumber());
    }
}

(new AddMathExpressionTest())->run();
