<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Log;

trait FlexLogsTrait
{
    protected $localLogs = [];

    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;

    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
        if (!empty($this->localLogs)) {
            foreach ($this->localLogs as $record) {
                $this->logger->log(...$record);
            }
        }
    }

    public function getLocalLogs()
    {
        return $this->localLogs;
    }

    //@doc: if logger is set, local logs only retains last log entry
    protected function log(string|int $level, string $message, mixed $context)
    {
        $argm = get_defined_vars();
        if (isset($this->logger)) {
            $this->logger->log(...$argm);
            $this->localLogs = [$argm];
        } else {
            $this->localLogs[] = $argm;
        }
    }

}
