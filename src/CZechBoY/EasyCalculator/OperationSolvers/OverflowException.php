<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\OperationSolvers;

use CZechBoY\EasyCalculator\MathExpressions\MathExpression;
use Exception;

class OverflowException extends Exception
{
    /**
     * @var MathExpression
     */
    private $mathExpression;

    /**
     * @param MathExpression $mathExpression
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(MathExpression $mathExpression, $message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->mathExpression = $mathExpression;
    }
}
