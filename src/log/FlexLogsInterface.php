<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Log;

use \Psr\Log;

interface FlexLogsInterface extends Log\LoggerAwareInterface
{
    public function getLocalLogs();
}
