<?php

namespace Suora\ApmWrapper\Profiler;

class Tideways extends \Suora\ApmWrapper\Profiler
{
    public function __construct(private readonly ?string $apiKey = null, private readonly ?string $serviceName = null)
    {
        if (! class_exists('\Tideways\Profiler')) {
            throw new \RuntimeException('\Tideways\Profiler class not found. Please deactivate '.__CLASS__);
        }
    }

    public function startTransaction(string $transactionName = null): void
    {
        $options = [];

        if ($this->apiKey !== null) {
            $options['api_key'] = $this->apiKey;
        }
        if ($this->serviceName !== null) {
            $options['service'] = $this->serviceName;
        }

        \Tideways\Profiler::start($options);
    }

    public function setTransactionName(string $name): void
    {
        \Tideways\Profiler::setTransactionName($name);
    }

    public function endTransaction(): void
    {
        \Tideways\Profiler::stop();
    }

    public function logThrowable(\Throwable $throwable): void
    {
        \Tideways\Profiler::logException($throwable);
    }

    public function addParameter(string $key, string $value): void
    {
        \Tideways\Profiler::setCustomVariable($key, $value);
    }
}
