<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;

interface FlexLogsInterface extends \Psr\Log\LoggerAwareInterface
{
    public function getLocalLogs();
}
