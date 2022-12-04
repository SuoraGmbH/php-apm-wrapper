<?php

namespace Suora\ApmWrapper\Profiler;

/**
 * Automatically activates tideways profiler if it is available.
 */
class AutoTideways extends Aggregate
{
    public function __construct(readonly ?string $apiKey = null, readonly ?string $serviceName = null)
    {
        if (class_exists('\Tideways\Profiler')) {
            parent::__construct([new Tideways($this->apiKey, $this->serviceName)]);
        } else {
            parent::__construct([]);
        }
    }
}
