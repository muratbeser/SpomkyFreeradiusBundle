<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityManager;

use Spomky\FreeradiusBundle\Model\UserInterface;
use Spomky\FreeradiusBundle\Model\UserRepositoryInterface;

class UserManager extends BaseManager implements UserManagerInterface
{
    public function __construct(EntityManager $em, $class)
    {
        parent::__construct($em, $class);
        if (!$this->getRepository() instanceof UserRepositoryInterface) {
            throw new \Exception("The repository of class $class must implement Spomky\FreeradiusBundle\Model\UserRepositoryInterface");
        }
    }

    public function getSumBandwidth(UserInterface $user, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->getRepository()->getSumBandwidth($user, $date_start, $date_end);
    }

    public function getBandwidth(UserInterface $user, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->getRepository()->getBandwidth($user, $date_start, $date_end);
    }
}
