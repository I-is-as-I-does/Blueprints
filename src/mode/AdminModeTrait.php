<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mode;

trait AdminModeTrait
{
    private $adminMode = false;

    public function enterAdminKey(string $key)
    {
        $this->adminMode = password_verify($key, $_ENV['ADMIN_HASH']);
    }

    public function inAdminMode()
    {
        return $this->adminMode;
    }

    protected function modeChecker()
    {
        return [$this, 'inAdminMode'];
    }

    protected function relayChecker(object $relatedClass)
    {
        if(method_exists($relatedClass, 'setModeChecker')){
            $relatedClass->setModeChecker($this->modeChecker());
        }
    }
}
