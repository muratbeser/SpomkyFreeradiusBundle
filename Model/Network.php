<?php

namespace Spomky\FreeradiusBundle\Model;

use Spomky\FreeradiusBundle\Model\NetworkInterface;

class Network implements NetworkInterface
{
    protected $name;
    protected $nass;
    protected $users;

    public function getName()
    {
        return $this->name;
    }

    public function getNass()
    {
        return $this->nass;
    }

    public function getUsers()
    {
        return $this->users;
    }
}
