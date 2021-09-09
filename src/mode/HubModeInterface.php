<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mode;

interface HubModeInterface {
    
    public function setModeChecker( $modeChecker);
    public function inAdminMode();

}