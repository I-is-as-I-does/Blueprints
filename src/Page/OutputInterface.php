<?php
/* This file is part of Blueprints | SSITU | (c) 2021 I-is-as-I-does */

namespace SSITU\Blueprints\Page;


interface OutputInterface {

    public function __construct($I);
    public function getCachePath();
    public function getOutput();
}