<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityManager;

use Spomky\FreeradiusBundle\Model\AccountingRepositoryInterface;

class AccountingManager extends BaseManager implements AccountingManagerInterface
{
    public function __construct(EntityManager $em, $class)
    {
        parent::__construct($em, $class);
        if (!$this->getRepository() instanceof AccountingRepositoryInterface) {
            throw new \Exception("The repository of class $class must implement Spomky\FreeradiusBundle\Model\AccountingRepositoryInterface");
        }
    }
}
