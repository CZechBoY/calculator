<?php declare(strict_types = 1);

abstract class BaseTestCase extends \Tester\TestCase
{
    /**
     * @param string|null $method
     */
    public function run($method = null)
    {
        if ($this->shouldRun()) {
            parent::run($method);
        }
    }

    /**
     * @param string $method
     * @param array|null $args
     */
    public function runTest($method, array $args = null)
    {
        if ($this->shouldRun()) {
            parent::runTest($method, $args);
        }
    }

    /**
     * @return bool
     */
    private function shouldRun(): bool
    {
        return $_SERVER['argv'][1] !== 'analyse';
    }
}
