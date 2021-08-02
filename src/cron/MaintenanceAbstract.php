<?php
/* This file is part of Onement:Kairos | SSITU | (c) 2021 I-is-as-I-does */
namespace SSITU\Kairos;

abstract class MaintenanceAbstr implements MaintenanceIntrf
{
    protected $details = [];
    protected $rslt;

    public function getDetails()
    {
        return $this->details;
    }
    public function getRslt()
    {
        return $this->rslt;
    }

    abstract public function run();

}
