<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\Entities;

use Exception;

class BadNumberFormatException extends Exception
{
    /**
     * @var string|int|float|null
     */
    private $number;

    /**
     * @param string|int|float|null $number
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($number, string $message = '', int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->number = $number;
    }

    /**
     * @return float|int|null|string
     */
    public function getNumber()
    {
        return $this->number;
    }
}
