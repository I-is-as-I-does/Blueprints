<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;

trait HubLogTrait {
    
    protected $hubLogger;
    public function setHubLogger($hubLogger)
    {
       $this->hubLogger = $hubLogger;
    }
    protected function hubLog($level, $message, $context)
    {
        return call_user_func_array($this->hubLogger, [$level, $message, $context]); 
    }
}