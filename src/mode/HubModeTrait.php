<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;

trait HubModeTrait
{
    protected $modeChecker;
    public function setModeChecker(callable $modeChecker)
    {
        $this->modeChecker = $modeChecker;
    }
    protected function inAdminMode()
    {
        return call_user_func($this->modeChecker);
    }
}
