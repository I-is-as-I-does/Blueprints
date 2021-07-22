<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints;

interface AdminModeInterface
{

    public function enterAdminKey($key);
    public function inAdminMode();
}
