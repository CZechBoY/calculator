<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\MathExpressions;

use CZechBoY\EasyCalculator\Entities\Numero;

class MathExpressionParser
{
    const ADD_INTEGER_FORMAT = '\s*(?P<a>[-]?\d+)\s*(?P<operation>[\+-])\s*(?P<b>\d+)\s*';

    /**
     * @param string $mathExpressionInput
     *
     * @return MathExpression
     *
     * @throws UnknownMathExpressionException
     */
    public function parse(string $mathExpressionInput): MathExpression
    {
        if (preg_match(sprintf('~^%s$~', self::ADD_INTEGER_FORMAT), $mathExpressionInput, $matches) === 1) {
            $a = Numero::fromInteger((int)$matches['a']);
            $b = Numero::fromInteger((int)($matches['operation'] . $matches['b']));

            return new AddMathExpression($a, $b);
        }

        throw new UnknownMathExpressionException($mathExpressionInput);
    }
}
