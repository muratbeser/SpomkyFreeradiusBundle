<?php

namespace Spomky\FreeradiusBundle\Model;

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
