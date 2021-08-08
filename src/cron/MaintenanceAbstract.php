<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */
namespace SSITU\Blueprints\Cron;

abstract class MaintenanceAbstract implements MaintenanceInterface
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
