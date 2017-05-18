Implementace jednoduché kalkulačky v PHP.

Co to umí?
---
Aktuální verze zatím umí pouze sčítání celých čísel, kladných i záporných.

Instalace pomocí Composeru:
---
`composer require czechboy/easy-calculator`

Spuštění kalkulačky zatím pouze přes vlastní skript:
---
```php
<?php
use CZechBoY\EasyCalculator as EC;

// Nejlepší třídy zaregistrovat jako služby v dependency injection containeru/service locatoru.
$calculator = new EC\EasyCalculator(new EC\MathExpressions\MathExpressionParser(), new EC\OperationSolvers\OperationSolverResolver());
// vlastní výpočet
$number = $calculator->calculate($input);
// možno opakovat vícekrát na jedné instanci
$number = $calculator->calculate($anotherInput);

// výpis výsledku do konzole/stránky
printf("Result of %s is %d\n", $input, $number->getNumber());
```

Proč?
===
Cílem bylo procvičit si testování, návrh, vytvoření balíčku na Packagist a v neposlední řadě novinky PHP 7.
Dále bych si chtěl zkusit zprovoznit CI server - nejspíš Travis CI; nějakou metriku na statistiky pokrytí testy - nejspíš Coveralls.
