<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator;

use CZechBoY\EasyCalculator\Entities\Numero;
use CZechBoY\EasyCalculator\MathExpressions\MathExpressionParser;
use CZechBoY\EasyCalculator\OperationSolvers\OperationSolverResolver;

class EasyCalculator
{
    /**
     * @var MathExpressionParser
     */
    private $parser;

    /**
     * @var OperationSolverResolver
     */
    private $operationSolverResolver;

    /**
     * @param MathExpressionParser $parser
     * @param OperationSolverResolver $operationSolverResolver
     */
    public function __construct(MathExpressionParser $parser, OperationSolverResolver $operationSolverResolver)
    {
        $this->parser = $parser;
        $this->operationSolverResolver = $operationSolverResolver;
    }

    /**
     * @param string $input
     *
     * @return Numero
     */
    public function calculate(string $input): Numero
    {
        $mathExpression = $this->parser->parse($input);
        $expressionSolver = $this->operationSolverResolver->getSolverForExpression($mathExpression);
        $result = $expressionSolver->solve($mathExpression->getA(), $mathExpression->getB());

        return $result;
    }
}
