<?php

namespace Spomky\FreeradiusBundle\Model;

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

    public function __construct(EntityManager $em, $class) {
        $this->em = $em;
        $this->repository = $em->getRepository($class);
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository() {
        return $this->repository;
    }
}