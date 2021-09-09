<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mode;

trait HubModeTrait
{
    protected $modeChecker;
    public function setModeChecker($modeChecker)
    {
        $this->modeChecker = $modeChecker;
    }
    public function inAdminMode()
    {
        if(!empty($this->modeChecker)){
        return call_user_func($this->modeChecker);
    }
    return false;
    }
}
