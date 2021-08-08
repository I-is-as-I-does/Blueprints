<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Cron;

interface MaintenanceInterface
{
    public function getDetails();
    public function getRslt();
    public function run();
}
