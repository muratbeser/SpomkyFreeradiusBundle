<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityManager;

use Spomky\FreeradiusBundle\Model\NasInterface;
use Spomky\FreeradiusBundle\Model\NasRepositoryInterface;

class NasManager extends BaseManager implements NasManagerInterface
{
    public function __construct(EntityManager $em, $class)
    {
        parent::__construct($em, $class);
        if (!$this->getRepository() instanceof NasRepositoryInterface) {
            throw new \Exception("The repository of class $class must implement Spomky\FreeradiusBundle\Model\NasRepositoryInterface");
        }
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
