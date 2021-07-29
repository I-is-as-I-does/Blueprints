<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;

trait ConfigSetterTrait
{

    private function setConfig(array $defined_vars, bool $throwException = false)
    {
        foreach ($defined_vars as $k => $v) {
            $propK = '_'.$k;
            if (property_exists($this, $propK)) {
                $this->$propK = $v;
            } else if ($throwException) {
                throw new \Exception("unknown-config-entry-[$v=>$v]");
            }
        }
    }

}
