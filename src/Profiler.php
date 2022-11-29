<?php

namespace Suora\ApmWrapper;

abstract class Profiler
{
    abstract public function startTransaction(string $transactionName = null): void;

    /**
     * Set a new name for the currently running transaction.

     * Some implementations may not support this and might start a new transaction instead.
     */
    abstract public function setTransactionName(string $name): void;

    /**
     * Mark the end of the currently running transaction.
     */
    abstract public function endTransaction(): void;

    abstract public function logThrowable(\Throwable $throwable): void;

    /**
     * Add custom context to the current transaction.
     *
     * This allows you to pass additional information to the APM server, such as
     * user information, request information, etc.
     *
     * @example $this->addParameter('user_id', $user->id);
     */
    abstract public function addParameter(string $key, string $value): void;
}
