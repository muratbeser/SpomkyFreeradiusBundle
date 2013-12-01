<?php

namespace Spomky\FreeradiusBundle\Model;

use Spomky\FreeradiusBundle\Model\GroupInterface;

class Group implements GroupInterface
{
    protected $name;
    protected $users;
    protected $replies;
    protected $checks;

    public function getName()
    {
        return $this->name;
    }

    public function getUsers()
    {
        return $this->users;
    }

    public function getReplies()
    {
        return $this->replies;
    }

    public function getChecks()
    {
        return $this->replies;
    }
}
