<?php declare(strict_types = 1);

use CZechBoY\EasyCalculator\Entities\Numero;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

final class NumeroTest extends BaseTestCase
{
    public function testInteger()
    {
        Assert::type(Numero::class, Numero::fromInteger(9));
        Assert::same(9, Numero::fromInteger(9)->getNumber());
        Assert::true(Numero::fromInteger(9)->isInteger());

        Assert::type(Numero::class, Numero::fromInteger(-9));
        Assert::same(-9, Numero::fromInteger(-9)->getNumber());
        Assert::true(Numero::fromInteger(-9)->isInteger());
    }

    public function testFloat()
    {
        Assert::type(Numero::class, Numero::fromFloat(9.5));
        Assert::same(9.5, Numero::fromFloat(9.5)->getNumber());
        Assert::true(Numero::fromFloat(9.5)->isFloat());

        Assert::type(Numero::class, Numero::fromFloat(-9.5));
        Assert::same(-9.5, Numero::fromFloat(-9.5)->getNumber());
        Assert::true(Numero::fromFloat(-9.5)->isFloat());
    }
}

(new NumeroTest())->run();
