<?php declare(strict_types = 1);

namespace CZechBoY\EasyCalculator\MathExpressions;

use CZechBoY\EasyCalculator\Entities\Numero;

abstract class MathExpression
{
    /**
     * @var Numero
     */
    private $a;

    /**
     * @var Numero
     */
    private $b;

    /**
     * @param Numero $a
     * @param Numero $b
     */
    public function __construct(Numero $a, Numero $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return Numero
     */
    public function getA(): Numero
    {
        return $this->a;
    }

    /**
     * @return Numero
     */
    public function getB(): Numero
    {
        return $this->b;
    }
}
