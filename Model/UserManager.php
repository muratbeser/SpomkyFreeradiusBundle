<?php

namespace Spomky\FreeradiusBundle\Model;

use SpomkyFreeradiusBundle\Model\UserInterface;

class UserManager implements UserManagerInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    protected $repository;

    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repository = $em->getRepository($class);
        if (!$this->repository instanceof UserInterface) {
            throw new \Exception("The repository of class $class must implement SpomkyFreeradiusBundle\Model\UserInterface");
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository()
    {
        return $this->repository;
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
