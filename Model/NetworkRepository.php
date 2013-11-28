<?php

namespace Spomky\FreeradiusBundle\Model;

use Doctrine\ORM\EntityRepository;

use SpomkyFreeradiusBundle\Model\NetworkInterface;

class NetworkRepository extends EntityRepository implements NetworkRepositoryInterface
{
    public function getSumBandwidth(NetworkInterface $network, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->createQueryBuilder('a')
        ->select("SUM(a.acctinputoctets) AS input, SUM(a.acctoutputoctets) AS output")
        ->innerJoin('a.nas', 'd')
        ->innerJoin('d.network', 'n')
        ->where('n.id = :id')
        ->andWhere('a.acctstarttime >= :date_start')
        ->andWhere('a.acctstarttime < :date_end')
        ->setParameter('date_start', $date_start)
        ->setParameter('date_end', $date_end)
        ->setParameter('id', $network)
        ->getQuery()
        ->execute();
    }
    public function getBandwidth(NetworkInterface $network, \Datetime $date_start, \Datetime $date_end)
    {
        return $this->createQueryBuilder('a')
        ->select("YEAR(a.acctstarttime) AS year, MONTH(a.acctstarttime) AS month, DAY(a.acctstarttime) AS day, SUM(a.acctinputoctets) AS input, SUM(a.acctoutputoctets) AS output")
        ->innerJoin('a.nas', 'd')
        ->innerJoin('d.network', 'n')
        ->where('n.id = :id')
        ->groupBy("year")
        ->addGroupBy("month")
        ->addGroupBy("day")
        ->andWhere('a.acctstarttime >= :date_start')
        ->andWhere('a.acctstarttime < :date_end')
        ->setParameter('date_start', $date_start)
        ->setParameter('date_end', $date_end)
        ->setParameter('id', $network)
        ->getQuery()
        ->execute();
    }
}
