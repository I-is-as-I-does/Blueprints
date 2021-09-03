<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Shut;

trait EnderReqTrait
{

    protected $ender;
    protected $enderProperties = [];
    protected $autoregisterId;

    public function setEnder( $ender)
    {
        $this->ender = $ender;
        if (!empty($this->enderProperties)) {
            $this->autoregisterId = $this->register(...$this->enderProperties);
        }
    }

    protected function register(mixed $callback, array $argm = [], int $priority = 2)
    {
        if (isset($this->ender) && method_exists($this->ender, 'register')) {
            $id = $this->ender->register($callback, $argm, $priority);
            return $id;
        }
        return false;
    }

    protected function deregister(string $id)
    {
        if (isset($this->ender) && method_exists($this->ender, 'deregister')) {
            $this->ender->deregister($id);
        }
    }

    protected function setEnderProperties(string $methodName, array $methodArgm = [], int $priority = 2)
    {
        $this->enderProperties['callback'] = [$this, $methodName];
        $this->enderProperties['argm'] = $methodArgm;
        $this->enderProperties['priority'] = $priority;
    }

}
