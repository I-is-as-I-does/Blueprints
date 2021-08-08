<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Mode;

interface AdminModeInterface
{

    public function enterAdminKey(string $key,string $envIndex);
    public function inAdminMode();
}
