<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\MathExpressions;

use Exception;

class UnknownMathExpressionException extends Exception
{
    /**
     * @var string
     */
    private $mathExpressionInput;

    /**
     * @param string $mathExpressionInput
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(string $mathExpressionInput, string $message = '', int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->mathExpressionInput = $mathExpressionInput;
    }

    /**
     * @return string
     */
    public function getMathExpressionInput(): string
    {
        return $this->mathExpressionInput;
    }
}
