<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\Entities;

final class Numero
{
    /**
     * @var float|int
     */
    private $number;

    /**
     * @param float|int $number
     */
    private function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @param int $number
     *
     * @return self
     */
    public static function fromInteger(int $number): self
    {
        return new self($number);
    }

    /**
     * @param float $number
     *
     * @return self
     */
    public static function fromFloat(float $number): self
    {
        return new self($number);
    }

    /**
     * @return float|int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return bool
     */
    public function isFloat(): bool
    {
        return is_float($this->number);
    }

    /**
     * @return bool
     */
    public function isInteger(): bool
    {
        return is_int($this->number);
    }
}
