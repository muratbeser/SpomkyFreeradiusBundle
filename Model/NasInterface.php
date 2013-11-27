<?php

namespace Spomky\FreeradiusBundle\Model;

interface NasInterface
{
    public function getMac();
    public function getNetwork();
    public function getAccountings();
}
