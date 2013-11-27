<?php

namespace Spomky\FreeradiusBundle\Model;

class User implements UserInterface
{
    protected $name;
    protected $groups;
    protected $network;
    protected $replies;
    protected $checks;
    protected $accountings;

    public function getName()
    {
        return $this->name;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function getReplies()
    {
        return $this->replies;
    }

    public function getChecks()
    {
        return $this->checks;
    }

    public function getAccountings()
    {
        return $this->accountings;
    }
}
