<?php declare(strict_types = 1);

require_once __DIR__ . '/../../bootstrap.php';

use CZechBoY\EasyCalculator\Entities\Numero;
use CZechBoY\EasyCalculator\MathExpressions\AddMathExpression;
use CZechBoY\EasyCalculator\MathExpressions\MathExpressionParser;
use CZechBoY\EasyCalculator\MathExpressions\UnknownMathExpressionException;
use Tester\Assert;

class MathExpressionParserTest extends BaseTestCase
{
    public function testUnknownErrorShouldThrowException()
    {
        $parser = new MathExpressionParser();

        Assert::throws(function() use ($parser) {
            $parser->parse('10a20');
        }, UnknownMathExpressionException::class);
    }

    public function testAddPositiveIntegers()
    {
        $parser = new MathExpressionParser();

        $result = $parser->parse('1+20');

        Assert::type(AddMathExpression::class, $result);

        Assert::type(Numero::class, $result->getA());
        Assert::same(1, $result->getA()->getNumber());

        Assert::type(Numero::class, $result->getB());
        Assert::same(20, $result->getB()->getNumber());
    }

    public function testAddNegativeIntegerA()
    {
        $parser = new MathExpressionParser();

        $result = $parser->parse('-1+20');

        Assert::type(AddMathExpression::class, $result);

        Assert::type(Numero::class, $result->getA());
        Assert::same(-1, $result->getA()->getNumber());

        Assert::type(Numero::class, $result->getB());
        Assert::same(20, $result->getB()->getNumber());
    }

    public function testAddNegativeIntegerB()
    {
        $parser = new MathExpressionParser();

        $result = $parser->parse('1-20');

        Assert::type(AddMathExpression::class, $result);

        Assert::type(Numero::class, $result->getA());
        Assert::same(1, $result->getA()->getNumber());

        Assert::type(Numero::class, $result->getB());
        Assert::same(-20, $result->getB()->getNumber());
    }
}

(new MathExpressionParserTest())->run();
