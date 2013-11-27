<?php

namespace Spomky\FreeradiusBundle\Model;

class Nas implements NasInterface
{
    protected $mac;
    protected $network;
    protected $accountings;

    public function getMac()
    {
        return $this->mac;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function getAccountings()
    {
        return $this->accountings;
    }
}
