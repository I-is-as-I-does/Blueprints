<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Log;

trait HubLogsTrait
{
    protected $hubLog;
    public function setHubLog($hubLog)
    {
        $this->hubLog = $hubLog;
    }
    protected function log(string|int $level, string $message, mixed $context = null)
    {
        if($log = $this->hubLog){
            $log($level, $message, $context);
        }
        
    }
}
