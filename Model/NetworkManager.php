<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityManager;

use Spomky\FreeradiusBundle\Model\NetworkInterface;
use Spomky\FreeradiusBundle\Model\NetworkRepositoryInterface;

class NetworkManager extends BaseManager implements NetworkManagerInterface
{
    public function __construct(EntityManager $em, $class)
    {
        parent::__construct($em, $class);
        if (!$this->getRepository() instanceof NetworkRepositoryInterface) {
            throw new \Exception("The repository of class $class must implement Spomky\FreeradiusBundle\Model\NetworkRepositoryInterface");
        }
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
