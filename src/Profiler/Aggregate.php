<?php

namespace Suora\ApmWrapper\Profiler;

use Suora\ApmWrapper\Profiler;

/**
 * Allows you to dispatch to multiple profilers at once.
 */
class Aggregate extends Profiler
{
    /**
     * @param  Profiler[]  $profilers
     */
    public function __construct(private readonly array $profilers)
    {
    }

    public function startTransaction(string $transactionName = null): void
    {
        foreach ($this->profilers as $profiler) {
            $profiler->startTransaction($transactionName);
        }
    }

    public function setTransactionName(string $name): void
    {
        foreach ($this->profilers as $profiler) {
            $profiler->setTransactionName($name);
        }
    }

    public function endTransaction(): void
    {
        foreach ($this->profilers as $profiler) {
            $profiler->endTransaction();
        }
    }

    public function logThrowable(\Throwable $throwable): void
    {
        foreach ($this->profilers as $profiler) {
            $profiler->logThrowable($throwable);
        }
    }

    public function addParameter(string $key, string $value): void
    {
        foreach ($this->profilers as $profiler) {
            $profiler->addParameter($key, $value);
        }
    }
}
