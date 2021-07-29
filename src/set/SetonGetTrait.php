<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */
namespace SSITU\Blueprints;


trait SetonGetTrait {

    public function __get(string $name)
    {       
        if (property_exists($this, $name)) {
            if(!isset($this->$name) && method_exists($this, 'set_' . $name)) {
                $setter = 'set_' . $name;
                $this->$setter();
            }
            return $this->$name;
        }
        return null;
    }

}