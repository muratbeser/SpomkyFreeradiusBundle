<?php

namespace Spomky\FreeradiusBundle\Model;

use SpomkyFreeradiusBundle\Model\NasInterface;

class NasManager implements NasManagerInterface
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
        if (!$this->repository instanceof NasInterface) {
            throw new \Exception("The repository of class $class must implement SpomkyFreeradiusBundle\Model\NasInterface");
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository()
    {
        return $this->repository;
    }

    public function getSumBandwidth(NasInterface $nas, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->getRepository()->getSumBandwidth($nas, $date_start, $date_end);
    }
    public function getBandwidth(NasInterface $nas, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->getRepository()->getBandwidth($nas, $date_start, $date_end);
    }
}
