<?php

namespace Spomky\FreeradiusBundle\Model;

use SpomkyFreeradiusBundle\Model\NetworkInterface;

class NetworkManager implements NetworkManagerInterface
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
        if (!$this->repository instanceof NetworkInterface) {
            throw new \Exception("The repository of class $class must implement SpomkyFreeradiusBundle\Model\NetworkInterface");
    }

    /**
     * {@inheritdoc}
     */
    public function getRepository()
    {
        return $this->repository;
    }

    public function getSumBandwidth(NetworkInterface $network, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->getRepository()->getSumBandwidth($network, $date_start, $date_end);
    }
    public function getBandwidth(NetworkInterface $network, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->getRepository()->getBandwidth($network, $date_start, $date_end);
    }
}
