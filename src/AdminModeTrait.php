<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;

trait AdminModeTrait
{
    private $adminMode = false;

    public function enterAdminKey($key)
    {
        $this->adminMode = password_verify($key, $_ENV['ADMIN_KEY']); //todo
    }

    public function inAdminMode()
    {
        return $this->adminMode;
    }

    protected function modeChecker()
    {
        return [$this, 'inAdminMode'];
    }

    protected function relayChecker($relatedClass)
    {
        if(method_exists($relatedClass, 'setModeChecker')){
            $relatedClass->setModeChecker($this->modeChecker());
        }
    }
}
