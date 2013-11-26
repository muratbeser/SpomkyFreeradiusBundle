<?php

namespace Spomky\FreeradiusBundle\Model;

class User implements UserInterface
{
    protected $name;
    protected $groups;
    protected $replies;
    protected $checks;
    protected $accountings;
    
    public function getName() {
        return $this->name;
    }
    
    public function getGroups() {
        return $this->groups;
    }
    
    public function getReplies() {
        return $this->replies;
    }
    
    public function getChecks() {
        return $this->replies;
    }
    
    public function getAccountings() {
        return $this->accountings;
    }
}
