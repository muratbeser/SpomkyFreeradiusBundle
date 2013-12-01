<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityManager;

use Spomky\FreeradiusBundle\Model\GroupRepositoryInterface;

class GroupManager extends BaseManager implements GroupManagerInterface
{
    public function __construct(EntityManager $em, $class)
    {
        parent::__construct($em, $class);
        if (!$this->getRepository() instanceof GroupRepositoryInterface) {
            throw new \Exception("The repository of class $class must implement Spomky\FreeradiusBundle\Model\GroupRepositoryInterface");
        }
    }
}
