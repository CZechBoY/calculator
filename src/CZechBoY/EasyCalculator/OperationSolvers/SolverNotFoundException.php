<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\OperationSolvers;

use CZechBoY\EasyCalculator\MathExpressions\MathExpression;
use Exception;

class SolverNotFoundException extends Exception
{
    /**
     * @var MathExpression
     */
    private $mathExpression;

    /**
     * @param MathExpression $mathExpression
     */
    public function __construct(MathExpression $mathExpression, string $message = '', int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->mathExpression = $mathExpression;
    }

    /**
     * @return MathExpression
     */
    public function getMathExpression(): MathExpression
    {
        return $this->mathExpression;
    }
}
